<?php

namespace App\Http\Controllers;

use App\Models\Menage;
use Illuminate\Http\Request;

class MenageController extends Controller
{
    public function index()
    {

        $menages = Menage::all();
        return view('menage.index', compact('menages'));

    }
    /**
     * return le formulaire de créationcreation d'un contact
     */
    public function create()
    {

        return view('menage.create');

    }


    /**
     * Enregistre un nouveau contact dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nomComplet'=>'required',
            'email'=> 'required',
            'telephone' => 'required',
            'quartier' => 'required'
        ]);


        $menage = new Menage([
            'nomComplet' => $request->get('nomComplet'),
            'email' => $request->get('email'),
            'telephone' => $request->get('telephone'),
            'quartier' => $request->get('quartier')
        ]);


        $menage->save();
        return redirect('/')->with('success', 'Menagère Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un contact spécifique
     */

    public function show($id)
    {

        $menage = menage::findOrFail($id);
        return view('menage.show', compact('menage'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $menage = menage::findOrFail($id);

        return view('menage.edit', compact('menage'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nomComplet'=>'required',
            'email'=> 'required',
            'telephone' => 'required',
            'quartier' => 'required'

        ]);




        $menage = menage::findOrFail($id);
        $menage->nomComplet = $request->get('nomComplet');
        $menage->email = $request->get('email');
        $menage->telephone = $request->get('telephone');
        $menage->quartier = $request->get('quartier');


        $menage->update();

        return redirect('/')->with('success', 'menagère Modifié avec succès');

    }




    /**
     * Supprime le contact dans la base de données
     */
    public function destroy($id)
    {

        $menage = menage::findOrFail($id);
        $menage->delete();

        return redirect('/')->with('success', 'menagère Supprime avec succès');

    }

}

