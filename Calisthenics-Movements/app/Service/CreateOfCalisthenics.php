<?php

namespace App\Service;

use App\Calisthenic;

class CreateOfCalisthenics{

    public function createCalisthenics(string $name,string $description, int $repetation, int $sequency, string $difficulty)
    {
        $calisthenic = Calisthenic::create([
            'name'=>$name,
            'description' => $description,
            'repetation' => $repetation,
            'sequency' =>  $sequency,
            'difficulty' => $difficulty
        ]);
        return $calisthenic;
    }
}
