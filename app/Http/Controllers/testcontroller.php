<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eloquent;
use Session;
class testcontroller extends Controller
{
    //
    public function index(){
        $eloquents = Eloquent::all();
        return view('eloquents',[
            'eloquents' => $eloquents,
        ]);
    }
    public function create(){
        return view('catergory.add');
    }
    public function store(Request $request){
        $eloquent = new Eloquent;
        $eloquent->uname = $request ->uname;
        $eloquent->save();
        Session::flash('success','add success');
        return redirect('test');
    }
    public function edit(Request $uid){
        //lay du lieu cu
        $eloquent['info'] = Eloquent::find($uid->uid)->toArray();
       return view('catergory/edit',$eloquent);
    }
    public function update(Request $uid){
        $eloquent = Eloquent::find($uid->uid);
        $eloquent->uname = $uid->uname;
        $eloquent->save();
        return redirect('model');
    }
    public function destroy(Request $uid){
       Eloquent::find($uid->uid)->delete();
        return redirect('model');
    }
}
 