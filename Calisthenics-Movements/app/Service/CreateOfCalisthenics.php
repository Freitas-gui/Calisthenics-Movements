<?php

namespace App\Service;

use App\Calisthenic;
use Illuminate\Http\Request;


class CreateOfCalisthenics{

    public function createCalisthenics(Request $request)
    {
        $difficulty_categories = array("easy", "medium", "hard", "expert");
        if(in_array($request->difficulty, $difficulty_categories)) {
            return Calisthenic::create($request->all());
        }
        return ('Erro: Difficulty should receiver values = easy ou medium ou hard ou expert');
    }

    public function updateCalisthenics(Request $request, Calisthenic $calisthenic)
    {
        $difficulty_categories = array("easy", "medium", "hard", "expert");
        if(in_array($request->difficulty, $difficulty_categories)) {
            $calisthenic->name = $request->name;
            $calisthenic->description = $request->description;
            $calisthenic->repetation = $request->repetation;
            $calisthenic->sequency=$request->sequency;
            $calisthenic->difficulty=$request->difficulty;
            $calisthenic->muscle_group=$request->muscle_group;
            $calisthenic->i_know=(isset($request->i_know))? 1 : 0;

            return $calisthenic;
        }
        return ('Erro: Difficulty should receiver values = easy ou medium ou hard ou expert');
    }
}
