<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";
    protected $primaryKey = "id";
    protected $fillable = ["name", "headoffice", "created_date"];

    public $timestamps = false;

    public function products()
    {
       return $this->hasMany(Produit::class, 'company_id', 'id');
    }

}

