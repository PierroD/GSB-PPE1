<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = "commentaires";
    protected $primaryKey = "id";
    protected $fillable = ["user_id", "produit_id", "build_date", "note", "text"];

    public $timestamps = false;

    public function poster()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
