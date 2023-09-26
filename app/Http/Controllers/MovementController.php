<?php

namespace App\Http\Controllers;

use App\Models\MovementModel;
use App\Models\ProduitModel;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class MovementController extends Controller
{
   public function create(){
    $data = ProduitModel::all();
    return view("create_movement",compact('data'));

   }
   public function store(Request $req){
    $data = new MovementModel;
    $req->validate([
        'id_produit'=>'required',
        'type'=>'required',
        'date'=>'required',
        'quantite'=>'required',
    ]);
    $data->id_produit=$req->input('id_produit');
    $data->type=$req->input('type');
    $data->date=$req->input('date');
    $data->quantite=$req->input('quantite');
    $data->save();
    ///

    $produit = ProduitModel::find($data->id_produit);
    $total_entree = $produit->movement()->where('type', 'entré')->sum('quantite');
    $total_sortie = $produit->movement()->where('type', 'sortie')->sum('quantite');
    $quantite = $produit->seuil;
    $quantite = $quantite + $total_entree - $total_sortie;
    if($quantite < 0){
        $quantite = $quantite + $total_entree - $total_sortie * 0;
        session()->flash('alert', 'Quantite est 0.');

        redirect()->back();
    }
   $produit->quantite_produit = $quantite;
   $produit->save();
   return redirect()->route("Produit.index");
}
}
