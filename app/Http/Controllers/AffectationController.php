<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Poste;
use App\Models\Employe;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affectation=Affectation::all();
        return view('Affectation.index',['affectations'=>$affectation]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personnels=Employe::all();
        $postes=Poste::all();
        
        return view('Affectation.create',compact('personnels','postes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Affectation::create($request->all());
        return redirect()->route('Affectation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function show(Affectation $affectation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function edit($id=null)
    {
        $personnels=Employe::all();
        $postes=Poste::all();
        $affectation=Affectation::find($id);
        return view('Affectation.edit',['affectation'=>$affectation],compact('personnels','postes'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         
        $affectation=Affectation::find($request->request->get("id"));
        $affectation->employé_id= ($request->get("employé_id")) ;
        $affectation->poste_nom = ($request->get("poste_nom"));
        $affectation->update();
        return redirect()->route('Affectation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $affectation=Affectation::find($id);
        if($affectation){
            $affectation->delete();
            session()->flash('message',"Suppression effectuée avec succès");
        }else{
            session()->flash('message',"Erreur l'élément que vous essayez de supprimer n'existe pas");
        }
        return redirect()->route('Affectation.index');
    }
}
