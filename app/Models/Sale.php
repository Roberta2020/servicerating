<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public $fillable = ['employee_id', 'contract_no', 'recommendation', 'speed', 'service', 'comments', 'is_consented'];

    public function employee(){
        return $this->belongsTo('App\Models\Employee');
    }
}