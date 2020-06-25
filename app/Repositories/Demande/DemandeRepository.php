<?php
namespace App\Repositories\Demande;

use App\Models\Demande\Demande;
use App\Repositories\ResourceRepository;

class DemandeRepository extends ResourceRepository
{
    public function __construct(Demande $demande)
    {
        $this->model=$demande;
    }

    public function all_demande($user_id)
    {
    	return $this->model->with('user')
    				->where('statut',1)
    				->whereHas('user', function($query) use($user_id){
    					$query->where('id',$user_id);
    				})
    			->orderBy('id','desc')
    			->get();
    }
}