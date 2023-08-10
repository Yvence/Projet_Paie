<?php

namespace App\Http\Controllers;

use App\Models\Avantage;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class AvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avantage=Avantage::all();
        return view('Avantage.index',['avantages'=>$avantage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Avantage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Avantage::create($request->all());
        return redirect()->route('Avantage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avantage  $avantage
     * @return \Illuminate\Http\Response
     */
    public function show(Avantage $avantage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function edit($id=null)
    {
         
        $avantage=Avantage::find($id);
        return view('Avantage.edit',['avantage'=>$avantage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avantage  $avantage
     * @return \Illuminate\Http\Response
     */
    public function miseajour(Request $request)
    {
        
        $avantage=Avantage::find($request->request->get("id"));
        $avantage->nom = ($request->get("nom")) ;
        $avantage->valeur = ($request->get("valeur"));
        $avantage->update();
        return redirect()->route('Avantage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avantage  $avantage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avantage=Avantage::find($id);
        if($avantage){
            $avantage->delete();
            session()->flash('message',"Suppression effectuée avec succès");
        }else{
            session()->flash('message',"Erreur l'élément que vous essayez de supprimer n'existe pas");
        }
        return redirect()->route('Avantage.index');
    }
}
