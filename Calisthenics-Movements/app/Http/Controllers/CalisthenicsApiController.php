<?php

namespace App\Http\Controllers;

use App\Calisthenic;
use App\Service\CreateOfCalisthenics;
use Illuminate\Http\Request;

class CalisthenicsApiController extends Controller
{
    public function index()
    {
        return Calisthenic::all();
    }

    public function store(Request $request, CreateOfCalisthenics $createOfCalisthenics)
    {
        $calisthenic = $createOfCalisthenics->createCalisthenics($request);
        if($calisthenic instanceof Calisthenic){
            return response()->json($calisthenic,201);
        }
        return response()->json($calisthenic, 406); //Not Acceptable
    }

    public function show(Calisthenic $calisthenic)
    {
        if(is_null($calisthenic)){
            return response()->json('', 204); # 204 No content
        }
        return response()->json($calisthenic);
    }

    public function update(Request $request, Calisthenic $calisthenic)
    {
        if (is_null ($calisthenic))
            return response()->json(['error' => 'resource not found'], 404);

        $calisthenic->fill($request->all());
        $calisthenic->save();

        return response()->json($calisthenic,201);
    }

    public function destroy( Calisthenic $calisthenic)
    {
        $calisthenic = Calisthenic::destroy($calisthenic->id);
        if($calisthenic === 0){
            return response()->json(['error' => 'resource not found'], 404);
        }
        return response()->json('', 204); # 204 No content
    }
}
