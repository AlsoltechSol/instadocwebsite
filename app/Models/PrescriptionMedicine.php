<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionMedicine extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'prescriptionmedicines';

    public function Prescription(){
        return $this->belongsTo(Prescription::class, 'prescription_id');
    }
}