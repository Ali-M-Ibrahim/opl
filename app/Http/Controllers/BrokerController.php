<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use App\Models\haselected;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrokerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_BROKER');
    }



    public function index()
    {
        $brokers = Broker::where('user_id',Auth::id())->orderBy('id', 'desc')->get();
        foreach ($brokers as $broker) {
            $hasSelected = haselected::where('cifs_code', $broker->code)
                ->where('state', 1)
                ->exists();
            $broker->status = $hasSelected ? 'نعم' : 'كلا';
        }

        return view('brokers.index', compact('brokers'));
    }

    public function create()
    {
        return view('brokers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:brokers,code',
            'name' => 'required|string|max:255',
            'telephone' => 'nullable|string|max:20',
        ]);
        $broker = new Broker();
        $broker->code = $request->code;
        $broker->name = $request->name;
        $broker->telephone = $request->telephone;
        $broker->user_id = Auth::id();
        $broker->save();
        return redirect()->route('brokers.index')->with('success', 'تمت إضافة الوسيط بنجاح');
    }

    public function edit(Broker $broker)
    {
        return view('brokers.edit', compact('broker'));
    }

    public function update(Request $request, Broker $broker)
    {
        $request->validate([
            'code' => 'required|unique:brokers,code,' . $broker->id,
            'name' => 'required|string|max:255',
            'telephone' => 'nullable|string|max:20',
        ]);

        $broker->update($request->only('code', 'name', 'telephone'));
        return redirect()->route('brokers.index')->with('success', 'تم تعديل بيانات الوسيط بنجاح');
    }

    public function destroy(Broker $broker)
    {
        $broker->delete();
        return redirect()->route('brokers.index')->with('success', 'تم حذف الوسيط بنجاح');
    }

    public function notElected()
    {
        $brokers = Broker::where('user_id',Auth::id())
            ->whereNotIn('code', function ($q) {
                $q->select('cifs_code')->from('haselecteds');
            })
            ->orderBy('id', 'desc')->get();
        return view('brokers.index', compact('brokers'));
    }

}


