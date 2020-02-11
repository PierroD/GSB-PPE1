<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = "roles";
    protected $primaryKey = "id";
    protected $fillable = ["name", "authorization", "created_at", "updated_at"];

    public $timestamps = false;
}
