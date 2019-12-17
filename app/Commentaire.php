<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = "commentaire";
    protected $primaryKey = "id";
    protected $fillable = ["client_id", "produit_id", "build_date", "note", "text"];

    public $timestamps = false;

    public function poster()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
