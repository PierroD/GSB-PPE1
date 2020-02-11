<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = "produits";
    protected $primaryKey = "id";
    protected $fillable = ["company_id", "title", "composition", "description", "grade", "version", "price", "logo"];

    public $timestamps = false;
    public function society()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'produit_id', 'id');
    }
    public function comments()
    {
        return $this->hasMany(Commentaire::class, 'produit_id', 'id');
    }
}
