<?php


namespace App\Service;


use App\Calisthenic;

class ManageCookies
{
    public static function createCookieLastMovement(Calisthenic $calisthenic)
    {
        setcookie("LastMovement", $calisthenic, time()+(60*60*24));
    }

    public static function destroyCookieLastMovement()
    {
        if(isset($_COOKIE['LastMovement'])) {
            $calisthenic = json_decode($calisthenic = $_COOKIE['LastMovement'], true);
            $exist = Calisthenic::where('id', $calisthenic['id'])->exists();

            if (!$exist)
                setcookie("LastMovement", json_encode($calisthenic), time()-(60*60*24));
        }
    }
}
