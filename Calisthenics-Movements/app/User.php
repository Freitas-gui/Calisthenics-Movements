<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
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
        'age',
    ];

    public function getAgeAttribute($value)
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

//    public function sendEmailVerificationNotification()
//    {
//        $this->notify(new \App\Notifications\CustomVerifyEmail($this->id));
//    }
}
