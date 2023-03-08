<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    use HasFactory;


    protected $table = 'c_r_u_d_s';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'text',
        'description'
    ];
}
