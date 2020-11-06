<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public $primaryKey = "id";

    public $table ="users";

    public $fillable =['name','email','password'];
}
