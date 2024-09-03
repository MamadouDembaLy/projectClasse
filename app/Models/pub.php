<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pub extends Model
{
    public function Page(){

        return $this-> belongsTo(page::class);
    }
}
