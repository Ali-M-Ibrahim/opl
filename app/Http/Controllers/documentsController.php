<?php

namespace App\Http\Controllers;

use App\Models\uni;
use Illuminate\Http\Request;
use App\Models\cif;
use App\Models\dto;
use App\Models\haselected;
use Carbon\Carbon;
use App\Models\akalim;
use App\Models\dine;
use App\Models\speciality;
use App\Models\kadaa;
use Illuminate\Support\Facades\DB;
use App\Models\locations;

class documentsController extends Controller
{
    public function FilterNames(Request $request){
        $dine= dine::pluck('value', 'value');
        $kadaa= kadaa::pluck('value', 'value');
        $unis= uni::pluck('value', 'value');
        if ($request->ajax()){
            $data = cif::with('gethaselected')
                ->when($request['dine'], function ($query) use ($request) {
                    return $query->where('Dine', $request['dine']);
                })
                ->when($request['kadaa'], function ($query) use ($request) {
                    return $query->where('Civil_IdKadaa', $request['kadaa']);
                })
                ->when($request['uni'], function ($query) use ($request) {
                    return $query->where('university', $request['uni']);
                })
                ->orderBy('code', 'asc')->get();
            return view('components/namesfiltered')->with("data",$data);
        }
        return view('admin.filteredNames')->with('data',[])->with("unis",$unis)->with("dine",$dine)
            ->with("kadaa",$kadaa);


    }

    public function NoelectedNames(Request $request){
        $dine= dine::pluck('value', 'value');
        $kadaa= kadaa::pluck('value', 'value');
        $unis= uni::pluck('value', 'value');

        if ($request->ajax()){

            $data = DB::table('cifs')
                ->leftJoin('haselecteds', 'cifs.code', '=', 'haselecteds.cifs_code')
                ->whereNull('haselecteds.cifs_code')
                ->when($request['dine'], function ($query) use ($request) {
                    return $query->where('cifs.dine', $request['dine']);
                })
                ->when($request['kadaa'], function ($query) use ($request) {
                    return $query->where('cifs.kadaa', $request['kadaa']);
                })
                ->when($request['uni'], function ($query) use ($request) {
                    return $query->where('cifs.university', $request['uni']);
                })
                ->select('cifs.*')
                ->orderBy('cifs.code', 'asc')->get();
            return view('components/NEnamesfiltered')->with("data",$data);
        }

        return view('admin.NoElectedNames')->with('data',[])->with("dine",$dine)->with("unis",$unis)->with("kadaa",$kadaa);


    }


    public function harakeNoelectedNames(Request $request){

            $data = DB::table('cifs')
                ->leftJoin('haselecteds', 'cifs.code', '=', 'haselecteds.cifs_code')
                ->where('haselecteds.cifs_code',null)
                ->where('cifs.akalim','<>','NA')
                ->orderBy('cifs.Code', 'asc')->get();





        return view('admin.harakeNoElectedNames')->with('data',$data);
    }




}
