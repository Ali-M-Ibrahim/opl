<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cif;
use App\Models\dto;
use App\Models\haselected;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
    }


    public function dashboard2(){
        $dataelected =haselected::where("state","1")->count();
        $datashia =haselected::where("dine","شيعي")->count();
        $datanon =haselected::where("dine","NA")->count();

        $datadine =  DB::table('haselecteds')
            ->select(('dine') ,DB::raw('count(*) as total'))
            ->where('state','1')
            ->groupBy('dine')
            ->get();

        $data2dine =  DB::table('cifs')
            ->select(('dine') ,DB::raw('count(*) as total'))
            ->groupBy('dine')
            ->get();

        foreach ($datadine as $a) {
            foreach ($data2dine as $b) {
                if($a->dine==$b->dine){
                    $a->ofall=$b->total;
                }
            }
        }


        $data =  DB::table('haselecteds')
            ->select(('kadaa') ,DB::raw('count(*) as total'))
            ->where('kadaa','<>','NA')
            ->where('state','1')
            ->groupBy('kadaa')
            ->get();


        $data2 =  DB::table('cifs')
            ->select(('kadaa') ,DB::raw('count(*) as total'))
            ->where('kadaa','<>','NA')
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

        return view('admin.dashboardAdmin2')
            ->with("nbelected",$dataelected)->with("shia",$datashia)
            -> with("nodine",$datanon)
            ->with("datetime",$date)
            ->with("datadine",$datadine)
            ->with("datakada2",$data);

    }




    public function index(Request $request)
    {
        if ($request->ajax()){
            if($request->has('code')){
                $result = cif::with('gethaselected')->where('code',$request['code'])->first();
                return view('components/singleresults')->with("result",$result)->with("ajax",200);
            }
            if($request->has('name')){
                $result = cif::with('gethaselected')->where('name', 'like' , '%' .$request['name'] . '%')->get();
                return view('components/multipleresults')->with("result",$result)->with("ajaxcode",200);
            }
         }
        return view('admin.searchcode');
    }

}
