<?php

namespace App\Http\Controllers;

use App\Models\akalim;
use App\Models\cif;
use App\Models\dine;
use App\Models\haselected;
use App\Models\kadaa;
use App\Models\locations;
use App\Models\speciality;
use Illuminate\Http\Request;

class ExportResultsController extends Controller
{
    public function Export(Request $request){
        $location = locations::pluck('value', 'value');
        $akalim= akalim::pluck('value', 'value');
        $dine= dine::pluck('value', 'value');
        $speciality= speciality::pluck('value', 'value');
        $kadaa= kadaa::pluck('value', 'value');
        $hasElected = haselected::pluck("cifs_code");
        $data = cif::whereIn("Code", $hasElected)->get();

        return view('admin.filteredNames')->with('data',$data)->with("akalim",$akalim)->with("dine",$dine)->with("speciality",$speciality)->with("kadaa",$kadaa)->with("location",$location);
    }
}
