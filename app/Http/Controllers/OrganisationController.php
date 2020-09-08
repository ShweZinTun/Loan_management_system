<?php

namespace App\Http\Controllers;

use App\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $organisations=Organisation::all();
        return view('organisations.index',['organisations'=>$organisations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('organisations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $organisations=new Organisation();
      
      
            $organisations->period=implode(',', $request->period);
      
        $organisations->name=$request->name;
        $organisations->address=$request->address;
        $organisations->phone=$request->phone;
        $organisations->email=$request->email;
        $organisations->amount=$request->amount;
        $organisations->interest_rate=$request->interest_rate;
       
        $organisations->service=$request->service;
        $organisations->rule=$request->rule;
        $organisations->saving=$request->saving;
        $organisations->save();
        return redirect('organisations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $organisations=Organisation::find($id);
        return view('organisations.edit',['organisations'=>$organisations]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $organisations=Organisation::find($id);
        $organisations->period=implode(',', $request->period);
        $organisations->name=$request->name;
        $organisations->address=$request->address;
        $organisations->phone=$request->phone;
        $organisations->email=$request->email;
        $organisations->amount=$request->amount;
        $organisations->interest_rate=$request->interest_rate;
        //$organisations->period=$request->period;
        $organisations->service=$request->service;
        $organisations->rule=$request->rule;
        $organisations->saving=$request->saving;
        $organisations->save();
        return redirect('organisations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        //
        Organisation::findOrFail($id)->delete();
        return redirect('organisations');
    }
}
