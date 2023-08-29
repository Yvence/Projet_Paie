<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departement=Departement::all();
        return view('Departement.index',['departements'=>$departement]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('Departement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        Departement::create($request->all());
        return redirect()->route('Departement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
     public function show(Departement $departement)
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
             
            $departement=Departement::find($id);
            return view('Departement.edit',['departement'=>$departement]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function miseajour(Request $request,$id)
    {
        
        $departement=Departement::find($id);
        $departement->nom = $request->nom;
        $departement->update();
        return redirect()->route('Departement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departement=Departement::find($id);
        if($departement){
            $departement->delete();
            session()->flash('message',"Suppression effectuée avec succès");
        }else{
            session()->flash('message',"Erreur l'élément que vous essayez de supprimer n'existe pas");
        }
        return redirect()->route('Departement.index');
    }
}
