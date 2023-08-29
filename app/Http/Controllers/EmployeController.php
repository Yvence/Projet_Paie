<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\PersPost;
use App\Models\Departement;
use App\Models\Employe;
use App\Models\Poste;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employe = Employe::all();
        return view('Employe.index',['employes'=>$employe]);

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postes = Poste::all();
        
        return view('Employe.create',["postes"=>$postes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $employe = new Employe();
        $employe->nom = $request->get("nom");
        $employe->prenom = $request->get("prenom");
        $employe->email = $request->get("email");
        $employe->telephone = $request->get("telephone");
        $employe->matricule = $request->get("matricule");
        $employe->date_naissance = $request->get("date_naissance");
        $employe->save();
        foreach($request->get("poste") as $p){;
         $persPost =  new PersPost();
         $persPost->employe_id= $employe->id;
         $persPost->poste_id= (int)$p;
         $persPost->save();
        }
        return redirect()->route('Employe.index');
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
    public function edit($id=null)
    {
        $employe=Employe::find($id);
        return view('Employe.edit',['Employe'=>$employe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $employe=Employe::find($request->request->get("id"));
        $employe->nom = $request->get("nom");
        $employe->prenom = $request->get("prenom");
        $employe->email = $request->get("email");
        $employe->telephone = $request->get("telephone");
        $employe->matricule = $request->get("matricule");
        $employe->date_naissance = $request->get("date_naissance");
        $employe->update();
        return redirect()->route('Employe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe=Employe::find($id);
        if($employe){
            $employe->delete();
            session()->flash('message',"Suppression effectuée avec succès");
        }else{
            session()->flash('message',"Erreur l'élément que vous essayez de supprimer n'existe pas");
        }
        return redirect()->route('Employe.index');
    }
    }

