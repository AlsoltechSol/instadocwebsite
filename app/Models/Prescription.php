<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function p_Medicines(){
        return $this->hasMany(PrescriptionMedicine::class, 'prescription_id');
    }
}
