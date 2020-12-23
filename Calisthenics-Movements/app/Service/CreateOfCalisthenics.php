<?php

namespace App\Service;

use App\Calisthenic;
use http\Env\Request;

class CreateOfCalisthenics{

    public function createCalisthenics(string $name,string $description, int $repetation, int $sequency, string $difficulty, string $muscle_group)
    {


        $calisthenic = Calisthenic::create([
            'name'=>$name,
            'description' => $description,
            'repetation' => $repetation,
            'sequency' =>  $sequency,
            'difficulty' => $difficulty,
            'muscle_group' => $muscle_group
        ]);
        return $calisthenic;
    }
}
