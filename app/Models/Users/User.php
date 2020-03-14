<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'remember_token', 'nom', 'prenoms', 'phone_number1', 'phone_number2','email','adresse_livraison','password','photo','statut','validate'
    ];
}
