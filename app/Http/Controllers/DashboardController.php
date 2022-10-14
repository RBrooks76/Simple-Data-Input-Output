<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MMP;

use Mockery\Undefined;
use Session;

class DashboardController extends Controller
{
    //

    public function toHome(){
        $header = "home";
        $session = Session::get('email');

        return view('Dashboard.index',[
            'header'    => $header,
            'isLogin'   => $session,
        ]);
    }

    public function toAdd(){
        return view('add');
    }

    public function onAddData(Request $request){
        MMP::create([
            'make' => $request->make,
            'model' => $request->model,
            'problem' => $request->problem,
        ]);

        return redirect()->route('toAdd');
    }

    public function toList(){
        return view('list');
    }

    public function onGetMMP(){
        return MMP::get();
    }

    public function onDelete(Request $request){
        MMP::where('id', $request->id)->delete();
    }

    public function onSearch(Request $request){
        if($request->key != ''){
            return MMP::where('make', $request->key)->orwhere('model', $request->key)->get();
        } else {
            return MMP::get();
        }

    }

}


