<?php

namespace Maritho\Badword;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class Badword extends Controller
{
    public static function check($string = [], $extract = false) {

        $toArray = explode(' ', $string);

        $check = DB::table('badwords')->select('badword')->whereIn('badword', $toArray)->get();

        $status = false;
        if ($check->count() > 1) {
            $status = true;
        }

        if ($extract) {
            return $check->toArray();
        }

        return $status;
    }
}
