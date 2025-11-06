<?php

namespace App\Http\Controllers;

use App\Models\cif;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use App\Models\haselected;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_USER');
    }

    public function index(Request $request)
    {

        if ($request->ajax()){
            if($request->has('code')){
                $result = cif::where('code',$request['code'])->first();
                return view('components/useresults')->with("result",$result)->with("ajax",200);
            }
        }
        return view('user.elected');


    }

    public function bulkelection(Request $request)
    {


        if ($request->ajax()){
            if($request->has('codes')){
                foreach($request->input('codes') as $c)
                {
                    if(cif::where('code',$c)->exists()){
                        $result = cif::where('code',$c)->first();
                            if(!haselected::where('cifs_code',$c)->exists()){
                                $newdata = new haselected();
                                $newdata->cifs_code= $result->code;
                                $newdata->dine= $result->dine;
                                $newdata->kadaa= $result->kadaa;
                                $newdata->state= '1';
                                $iduser = Auth::id();
                                $newdata->user_id= $iduser;
                                $newdata ->save();

                            }
                    }
                }

                return response()->json(['code' =>  200]);
            }
        }
        return view('user.bulkelection');


    }


    public function haselected($id,Request $request)
    {
        $this->validator($request->all())->validate();
        $result = cif::where('code',$request->cifs_code)->first();
        $newdata = new haselected();
        $newdata->cifs_code= $result->code;
        $newdata->dine= $result->dine;
        $newdata->kadaa= $result->kadaa;
        $newdata->state= '1';
        $iduser = Auth::id();
        $newdata->user_id= $iduser;
        $newdata ->save();
        return redirect(route('home'))->with('code','200');
    }


    public function removeelected($id,Request $request){
        $data =  haselected::where("cifs_code",$request->cifs_code)->first();
        $data->state='0';
        $iduser = Auth::id();
        $data->user_id= $iduser;
        $data->save();
        return redirect(route('home'))->with('code','500');
    }

    public function activateelection($id,Request $request){
        $data =  haselected::where("cifs_code",$request->cifs_code)->first();
        $data->state='1';
        $iduser = Auth::id();
        $data->user_id= $iduser;
        $data->save();
        return redirect(route('home'))->with('code','200');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cifs_code' => 'required|unique:haselecteds',
        ]);
    }



}
