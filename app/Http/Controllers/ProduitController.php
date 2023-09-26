<?php

namespace App\Http\Controllers;

use App\Models\ProduitModel;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(){
     //   $data = ProduitModel::all();
     //$data = ProduitModel::with('movement')->get();
        //dd($data->type);
        $data = ProduitModel::with('movement')->get();


      return view('affichage',compact("data"));
    }
    public function ajouter(){
        return view('create');

    }
    public function store(Request $req){
        $data = new ProduitModel;
        $req->validate([
            'libelle'=>'required',
            'code_bare'=>'required',
            'seuil'=>'required',
            'prix_achat'=>'required',
            'prix_vente'=>'required',

        ]);
        $data->libelle=$req->input('libelle');
        $data->code_bare=$req->input('code_bare');
        $data->quantite_produit=$req->input('seuil');
       $data->seuil=$req->input('seuil');
        $data->prix_achat=$req->input('prix_achat');
        $data->prix_vente=$req->input('prix_vente');
        $data->save();
        return redirect()->route('Produit.index');
    }
    public function edit($id){
        $data = ProduitModel::find($id);
        return view('edit',compact("data"));
    }
    public function update(Request $req,$id){
        $data = ProduitModel::find($id);
        $req->validate([
            'libelle'=>'required',
            'code_bare'=>'required',
            'seuil'=>'required',
            'prix_achat'=>'required',
            'prix_vente'=>'required',
        ]);
        $data->libelle=$req->get('libelle');
        $data->code_bare=$req->get('code_bare');
        $data->seuil=$req->get('seuil');
        $data->prix_achat=$req->get('prix_achat');
        $data->prix_vente=$req->get('prix_vente');
        $data->save();
        return redirect()->route('Produit.index');

    }
    public function delete($id){
        $data=ProduitModel::find($id);
        $data->delete();
        return redirect()->route('Produit.index');
   }
}
