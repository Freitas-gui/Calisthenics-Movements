<?php

namespace App\Http\Controllers;

use App\Calisthenic;
use App\Http\Requests\ValidateCalisthenicRequest;
use App\Service\CreateOfCalisthenics;
use App\Service\ManageCookies;
use Illuminate\Http\Request;

class CalisthenicsController extends Controller
{

    public function lastCreated()
    {
        ManageCookies::destroyCookieLastMovement();

        return view('calisthenics.lastMovement');
    }

    public function index(Request $request)
    {
        $calisthenics = Calisthenic::where('user_id',null)->get();
        $calisthenic = array();

        $index = 0;
        foreach($calisthenics as $element){
            $calisthenic[$index] = $element;
            $index++;
        }

        $message_success = $request->session()->get('message_success');

        return view('calisthenics.index',compact('calisthenics','calisthenic','message_success'));
    }

    public function create()
    {
        return view('calisthenics.create');
    }

    public function store(ValidateCalisthenicRequest $request, CreateOfCalisthenics $createOfCalisthenics)
    {
        $calisthenic = $createOfCalisthenics->createCalisthenics($request);

        if(!($calisthenic instanceof Calisthenic)){
            return redirect()->route('create');
        }
        else{
            $request->session()->flash("message_success", "New Calisthenics Movement Created with Success");
            ManageCookies::createCookieLastMovement($calisthenic);
            return redirect()->route('index');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request, Calisthenic $calisthenic, CreateOfCalisthenics $updateOfCalisthenics)
    {
        $calisthenic = $updateOfCalisthenics->updateCalisthenics($request, $calisthenic);

        if(!($calisthenic instanceof Calisthenic))
            $request->session()->flash("message", $calisthenic);
        else
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
