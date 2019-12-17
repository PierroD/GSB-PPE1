<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = "produit";
    protected $primaryKey = "id";
    protected $fillable = ["title", "composition", "description", "grade", "version", "price", "logo", "purchase_number"];

    public $timestamps = false;
    public function society()
    {
        return $this->belongsTo(Client::class, 'id');
    }
    public function comments()
    {
        return $this->hasMany(Commentaire::class, 'produit_id', 'id');
    }
}
