<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestemps=false;

    public function Role(){
        return $this->belongsToMany(Role::class,'user_roles');
    }
}
