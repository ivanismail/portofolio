<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone_number', 'email', 'city', 'province', 'photo' ,'twitter', 'facebook', 'linked', 'instagram', 'start_experience'
    ];

    public function GetCreatedAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    
    public function GetUpdatedAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
}
