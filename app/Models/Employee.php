<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $fillable = ['name', 'surname'];

    public function sales(){
        return $this->hasMany('App\Models\Sale');
}
