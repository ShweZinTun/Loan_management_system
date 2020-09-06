<?php

namespace App\Http\Controllers;

use App\Saving;
use Illuminate\Http\Request;

class SavingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $savings=Saving::all();
        return view('savings.index',['savings'=>$savings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('savings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $savings=new Saving();
        $savings->amount=$request->amount;
        $savings->period=$request->period;
        $savings->total_amount=$request->total_amount;
        $savings->save();
        return redirect('/savings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function show(Saving $saving)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $savings=Saving::find($id);
        return view('savings.edit',['savings'=>Saving::get(),'savings'=>$savings]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saving $saving)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        Saving::findOrFail($id)->delete();
        return redirect('savings');
    }
}
