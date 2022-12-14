<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='editors';
    protected $primary_key='id';
    protected $fillable=['name'];
}
