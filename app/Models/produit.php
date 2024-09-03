<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorie;
use App\Models\User;
class produit extends Model
{
    public function Categorie(){
        
        return $this-> belongsTo(categorie::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
