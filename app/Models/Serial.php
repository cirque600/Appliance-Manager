<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'appliance_id'
    ];

    protected $hidden = 
    [
        'serial'
        
    ];

    public function appliance()
    {
        return $this->belongsTo(Appliance::class);
    }
}
