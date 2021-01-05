<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function myProfile()
    {
        $age = $this->calc_age(Auth::user()->birth);
        return view("users.myProfile", compact('age'));
    }

    function calc_age($birth) {
        $birth=explode('-', $birth); // Create an array with birth date fields
        $today=date('Y-m-d'); $today=explode('-', $today); // Create an array with the current date fields
        $years=$today[0]-$birth[0]; // current year - year of birth

        if($birth[1] > $today[1])
            return $years-1; // If the month of birth is greater than the current month, it decreases by one year
        if($birth[1] == $today[1]){ // if the month of birth is the same as the current month, we need to see the days
            if($birth[2] <= $today[2])
                return $years;
            else
                return $years-1;
             }

        return $years;
    }

    public function deactive()
    {
        Auth::user()->active = 0;
        Auth::user()->save();

        return redirect()->route('index');
    }
}
