<?php

namespace App\Http\Controllers;

use App\Calisthenic;
use App\Service\CreateOfCalisthenics;
use Illuminate\Http\Request;

class CalisthenicsController extends Controller
{

    private function createCookie(Calisthenic $calisthenics)
    {
        setcookie('LastMovement', $calisthenics, time()+3600);
    }

    public function lastCreated()
    {
        return view('calisthenics.lastMovement');
    }

    public function index()
    {
        $calisthenics = Calisthenic::all();
        $calisthenic = array();

        $index = 0;
        foreach($calisthenics as $element){
            $calisthenic[$index] = $element;
            $index++;
        }
        return view('calisthenics.index',compact('calisthenics','calisthenic'));
    }

    public function create()
    {
        return view('calisthenics.create');
    }

    public function store(Request $request, CreateOfCalisthenics $createOfCalisthenics)
    {
        $calisthenic = $createOfCalisthenics->createCalisthenics($request);

        if(!($calisthenic instanceof Calisthenic)){
            $request->session()->flash("message",$calisthenic);
        }

        $this->createCookie($calisthenic);

        return redirect()->route('index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request, Calisthenic $calisthenic)
    {
        if($request->difficulty != ("easy"||"medium"||"hard"||"expert")) {
            $request->session()->flash(
                "message",
                "Error: difficulty should receiver value = easy ou medium ou hard ou expert"
            );
            return redirect()->route('index');
        }

        $calisthenic->name = $request->name;
        $calisthenic->description = $request->description;
        $calisthenic->repetation = $request->repetation;
        $calisthenic->sequency=$request->sequency;
        $calisthenic->difficulty=$request->difficulty;
        $calisthenic->muscle_group=$request->muscle_group;

        $calisthenic->save();
        return redirect()->route('index');
    }

    public function update(Request $request, Calisthenic $calisthenic)
    {
        return view('calisthenics.create',compact('calisthenic'));
    }

    public function destroy(Calisthenic $calisthenic)
    {
        $calisthenic->delete();
        return redirect()->route('index');
    }


}
