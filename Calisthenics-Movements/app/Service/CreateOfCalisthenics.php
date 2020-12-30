<?php

namespace App\Service;

use App\Calisthenic;
use Illuminate\Http\Request;


class CreateOfCalisthenics{

    public function createCalisthenics(Request $request)
    {
        $difficulty_categories = array("easy", "medium", "hard", "expert");
        if(in_array($request->difficulty,$difficulty_categories)) {
            return Calisthenic::create($request->all());
        }
        return (['difficulty_error' => 'difficulty should receiver value = easy ou medium ou hard ou expert']);
    }
}
