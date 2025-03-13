<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;

    protected $fillable=[
        'child_num_id',
        'full_name_children',
        'birthday',
        'admission',
        'address',
        'full_name_mother',
        'phone_number_mother',
        'pass_mother',
        'full_name_father',
        'phone_number_father',
        'pass_father',
        'phone_number_home',
        'another_address',
        'photo_of_child'
    ];
    
}
