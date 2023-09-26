<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovementModel extends Model
{
    use HasFactory;
    protected $table = "movements";
    protected $fillable = [
        "type",
        "date",
        "quantite",
        "id_produit"
    ];
    public function produit(){
        return $this->belongsTo(ProduitModel::class);
    }
}
