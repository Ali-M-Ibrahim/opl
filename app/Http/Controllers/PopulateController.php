<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\role_user;

class PopulateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
    }


    public function populate40demo(){
        for ($i = 0; $i <= 40; $i++) {
            $user = new User();
            $user->name  = 'demo'.$i;
            $user->email=  'demo'.$i;
            $user->password = Hash::make('123');
            $user->save();
            $user->roles()->attach(2);
            $user->save();
        }
        return "populated";
    }


    public function populate50demo(){
        for ($i = 0; $i <= 50; $i++) {
            $user = new User();
            $user->name  = 'DRBOX'.$i;
            $user->email=  'DRBOX'.$i;
            $user->password = Hash::make('123');
            $user->save();
            $user->roles()->attach(2);
            $user->save();
        }
        return "populated";
    }


    public function populate100demo(){
        for ($i = 51; $i <= 100; $i++) {
            $user = new User();
            $user->name  = 'drbox'.$i;
            $user->email=  'drbox'.$i;
            $user->password = Hash::make('123');
            $user->save();
            $user->roles()->attach(2);
            $user->save();
        }
        return "populated";
    }


    public function populateadmins(){
        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->name  = 'dradmin'.$i;
            $user->email=  'dradmin'.$i;
            $user->password = Hash::make('DR@123');
            $user->save();
            $user->roles()->attach(1);
            $user->save();
        }
        return "populated";
    }
}
