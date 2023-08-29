<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Retenu;
use App\Models\PersPost;
use App\Models\RetFix;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrat=Contrat::all();
        return view('Contrat.index',['contrats'=>$contrat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $retenu=Retenu::all();
        $perspost=PersPost::all();
        return view ('Contrat.create',compact('retenu','perspost'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contrat = new Contrat();
        $contrat->numero = $request->get("numero");
        $contrat->date_debut = $request->get("date_debut");
        $contrat->date_fin = $request->get("date_fin");
        $contrat->statut = $request->get("statut");
        $contrat->salaire_base = $request->get("salaire_base");
        //$contrat->per
        $contrat->save();
        foreach($request->get("retenu") as $r){;
         $retfix =  new RetFix();
         $retfix->contrat_id= $contrat->id;
         $retfix->retenu_id= (int)$r;
         $retfix->save();
        }
        return redirect()->route('Contrat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show(Contrat $contrat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function edit($id=null)
    {
        $contrat=Contrat::find($id);
        $perspost=PersPost::all();
        return view('Contrat.edit',['contrat'=>$contrat,'perspost'=>$perspost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contrat=Contrat::find($id);
        $contrat->numero= $request->numero;
        $contrat->statut = $request->statut;
        $contrat->date_debut = $request->date_debut;
        $contrat->date_fin = $request->date_fin;
        $contrat->update();
        return redirect()->route('Contrat.index');
    }
    

   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contrat=Contrat::find($id);
        if($contrat){
            $contrat->delete();
            session()->flash('message',"Suppression effectuée avec succès");
        }else{
            session()->flash('message',"Erreur l'élément que vous essayez de supprimer n'existe pas");
        }
        return redirect()->route('Contrat.index');
    }
}
