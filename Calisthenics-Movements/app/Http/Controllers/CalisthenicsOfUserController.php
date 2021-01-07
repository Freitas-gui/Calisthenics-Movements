<?php

namespace App\Http\Controllers;

use App\Calisthenic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalisthenicsOfUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calisthenics = Auth::user()->calisthenic;

        $calisthenic = array();

        $index = 0;
        foreach($calisthenics as $element){
            $calisthenic[$index] = $element;
            $index++;
        }

        $isUserList = true;

        return view('calisthenics.index',compact('calisthenics','calisthenic', 'isUserList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Calisthenic $calisthenic)
    {
        $userCalisthenic = Calisthenic::create($calisthenic->toArray());
        $userCalisthenic->user()->associate(Auth::user());
        $userCalisthenic->save();
        return redirect()->route('calisthenics.user.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
