<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginToken extends Model
{
    protected $table = 'login_tokens';

    protected $fillable = [
        'email',
        'token',
        'expires_at',
    ];

    public $timestamps = true;

    protected $dates = ['expires_at'];
}
