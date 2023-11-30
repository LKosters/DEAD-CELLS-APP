<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeleeWeapon extends Model
{
    use HasFactory;

    protected $fillable = [
        'base_dps',
        'blueprint_location',
        'description',
        'scaling',
        'weapon',
        'weapon_img',
    ];
    
}