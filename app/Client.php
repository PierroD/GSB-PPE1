<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "client";
    protected $primaryKey = "id";
    protected $fillable = ["last_name", "first_name", "compagny", "gender", "birth_date", "mail", "password", "money", "fidelity"];

    public $timestamps = false;

    public function kits()
    {
        return $this->hasMany(Produit::class, 'client_id', 'id');
    }
}

