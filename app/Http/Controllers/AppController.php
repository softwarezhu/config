<?php
/**
 * Created by PhpStorm.
 * User: piggy
 * Date: 15/8/2
 * Time: 下午6:14
 */

namespace App\Http\Controllers;


class AppController extends Controller
{

    public function index()
    {
        return view('app.index');
    }
}