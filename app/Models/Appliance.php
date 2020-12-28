<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appliance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',

        'manufacturer',
        'serial_number',
        'purchase_date'
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }
}
