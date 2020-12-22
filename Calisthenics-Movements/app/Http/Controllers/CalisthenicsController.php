<?php

namespace App\Http\Controllers;

use App\Calisthenic;
use App\Service\CreateOfCalisthenics;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CalisthenicsController extends Controller
{


    private function createCookie(Calisthenic $calisthenics)
    {
        setcookie('LastMovement', $calisthenics, time()+3600);
    }

    public function LastMovement()
    {
        return view('calisthenics.LastMovement');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calisthenics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CreateOfCalisthenics $createOfCalisthenics)
    {
        $calisthenics = $createOfCalisthenics->createCalisthenics(
            $request->name, $request->description,
            $request->repetation, $request->sequency,
            $request->difficulty, $request->muscle_group
        );
        $this->createCookie($calisthenics);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Calisthenic $calisthenic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calisthenic $calisthenic)
    {
        return view('calisthenics.create',compact('calisthenic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Calisthenic  $calisthenic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calisthenic $calisthenic)
    {
        $calisthenic->delete();
        return redirect()->route('index');
    }
}
