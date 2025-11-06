<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cif;
use App\Models\dto;
use App\Models\haselected;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;


class reportsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
    }


    public function mazhabInElection(){
        $data =  DB::table('haselecteds')
            ->select(('dine') ,DB::raw('count(*) as total'))
            ->where('state','1')
            ->groupBy('dine')
            ->get();

        $data2 =  DB::table('cifs')
            ->select(('dine') ,DB::raw('count(*) as total'))
            ->groupBy('dine')
            ->get();

        foreach ($data as $a) {
            foreach ($data2 as $b) {
                if($a->dine==$b->dine){
                    $a->ofall=$b->total;
                }
            }
        }
        $date = Carbon::now('Asia/Beirut');
        $date=$date->format('Y-m-d h:i:s');
        return view('admin.MazhabInElection')->with("datetime",$date)->with("data",$data);
    }

    public function kadaaInElection(){
        $data =  DB::table('haselecteds')
            ->select(('kadaa') ,DB::raw('count(*) as total'))
            ->where('state','1')
            ->groupBy('kadaa',)
            ->get();
        $data2 =  DB::table('cifs')
            ->select(('kadaa') ,DB::raw('count(*) as total'))
            ->groupBy('kadaa')
            ->get();

        foreach ($data as $a) {
            foreach ($data2 as $b) {
                if($a->kadaa==$b->kadaa){
                    $a->ofall=$b->total;
                }
            }
        }
        $date = Carbon::now('Asia/Beirut');
        $date=$date->format('Y-m-d h:i:s');
        return view('admin.KadaaInElection')->with("datetime",$date)->with("data",$data);
    }



}
