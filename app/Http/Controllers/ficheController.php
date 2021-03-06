<?php

namespace App\Http\Controllers;

use App\Fiche;
use Illuminate\Http\Request;

class ficheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Fiche::all(); 
        
       return view('pages.fiche.fiche', compact('list'))  ;
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
    public function store(Request $request)
    {
       $list = new Fiche(); 
       $list->observation= $request->input('obser'); 
       $list->ordonnace= $request->input('ord'); 
       $list->save(); 
       session()->flash('success', 'les donnes sont ajouter avec success'); 
        return redirect('fiche/index') ; 
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $list = Fiche::find($id); 
        $list->delete(); 
        session()->flash('success', ' la supprission a ete effectuer avec success '); 
        return redirect('fiche/index') ; 
        //
    }
}
