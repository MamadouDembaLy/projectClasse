<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public function typeEvent(){ 
        return $this-> belongsTo(type_event::class);
    }
}
