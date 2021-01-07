<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'cpf', 'birth', 'active', 'username',
    ];

    protected $appends = [
        'idade',
    ];

    public function getIdadeAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $this->birth)->age;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function calisthenic()
    {
        return $this->hasMany('App\Calisthenic');
    }
}
