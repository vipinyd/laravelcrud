<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        public function submit(Request $request)
    {
        $obj= new profile;

        
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->mobile=$request->mobile;
        $obj->password=$request->password;
        $obj->address=$request->address;

        $obj->save();
        $request->session()->flash('msg','Data Inserted Succesfully!!');
        return redirect('show');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        $data = profile::all();
        //dd("$data");
        return view('index',compact("data"));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile,$id)
    {
        return view('edit')->with('data',profile::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profile $profile,$id)
    {
        $ob= profile::find($id);
        $ob->name= $request->name;
        $ob->email= $request->email;
        $ob->mobile= $request->mobile;
        $ob->password= $request->password;
        $ob->address= $request->address;
        $ob->save();
        $request->session()->flash('msg','Data updated succesfully!!');
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,profile $profile ,$id,)
    {
        profile::destroy('id',$id);
        $request->session()->flash('msg','Data Deleted Succesfully!!');
        return redirect('show');
    }
}
