<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitModel extends Model
{
    use HasFactory;
    protected $table = "Produits";
    protected $fillable =[
        "libelle",
        "code_bare",
        "prix_achat",
        "prix_vente",
        "seuil",
        "quantite_produit"

    ];
    public function movement(){
        return $this->hasMany(MovementModel::class,'id_produit','id');
    }

}

