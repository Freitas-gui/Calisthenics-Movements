<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calisthenic extends Model
{
    protected $table = 'calisthenics';
    public $timestamps = false;
    protected $fillable = ['name','description', 'repetation', 'sequency', 'difficulty','muscle_group', 'i_know'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
