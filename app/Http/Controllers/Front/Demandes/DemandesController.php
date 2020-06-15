<?php

namespace App\Http\Controllers\Front\Demandes;
 
use App\Models\Demande\Demande;
use App\Repositories\Demande\DemandeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DemandesController extends Controller
{
    protected $demandeRepository; 

    public function __construct(DemandeRepository $demandeRepository) 
    {
        $this->demandeRepository = $demandeRepository;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandes = $this->demandeRepository->all_demande(Auth::user()->id);
        return view('front.demandes.index',compact('demandes'));
    }

    public function show($id)
    {
        return view('front.demandes.show');
    }

    public function update(Request $request,Demande $demande)
    {
        $inputs = $request->all();
        $this->demandeRepository->update($inputs, $demande);
        return redirect()->route('front-demandes.index')->with('Ok','Votre demande a ete modifie');
    }
    
    public function UpdateStatut(Request $request)
    {
        $inputs = $request->all();
        $demande = Demande::findOrFail($inputs['id']);
        $this->demandeRepository->update($inputs, $demande);

        return redirect()->route('front-demandes.index')->with('Ok','Votre demande a ete supprimer');
    }
}
