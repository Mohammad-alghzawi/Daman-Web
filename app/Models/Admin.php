<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Admin extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//         'image',
//         'phone',
//     ];

 
// }

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins'; // Reference your admins table

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

