<?php

namespace App\Http\Controllers;

use App\Models\Retenu;
use Illuminate\Http\Request;

class RetenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retenu=Retenu::all();
        return view('Retenu.index',['retenus'=>$retenu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Retenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Retenu::create($request->all());
        return redirect()->route('Retenu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Retenu  $retenu
     * @return \Illuminate\Http\Response
     */
    public function show(Retenu $retenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Retenu  $retenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id=null)
    {
        $retenu=Retenu::find($id);
        return view('Retenu.edit',['retenu'=>$retenu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Retenu  $retenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $retenu=Retenu::find($request->request->get("id"));
        $retenu->nom = ($request->get("nom")) ;
        $retenu->valeur = ($request->get("valeur"));
        $retenu->type_retenu = ($request->get("type_retenu"));
        $retenu->update();
        return redirect()->route('Retenu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Retenu  $retenu
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $retenu=Retenu::find($id);
        if($retenu){
            $retenu->delete();
            session()->flash('message',"Suppression effectuée avec succès");
        }else{
            session()->flash('message',"Erreur l'élément que vous essayez de supprimer n'existe pas");
        }
        return redirect()->route('Retenu.index');
    }
}
