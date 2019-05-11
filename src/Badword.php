<?php

namespace Maritho\Badword;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Badword extends Controller
{
    public static function check($string = null) {
    	if ($string != null) {
            return true;
        } else {
            return false;
        }
    }
}
