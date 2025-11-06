<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class haselected extends Model
{
    use HasFactory;

    public function getcif()
    {
        return $this->belongsTo(cif::class,'cifs_code','Code');
    }

    public function getUser(){
        return $this->belongsTo(User::class,'user_id');
    }


}

