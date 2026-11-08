<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
     protected $table = 'companies';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}