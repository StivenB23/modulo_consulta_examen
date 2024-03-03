<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use HasFactory;
    protected $guard = 'companies';
    protected $fillable = ['nit', 'name','email','password','confirm_company_status','status'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
