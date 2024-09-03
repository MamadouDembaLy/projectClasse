<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formations extends Model
{
    public function expertise(){
        return $this-> belongsTo(expertise::class);
    }
}
