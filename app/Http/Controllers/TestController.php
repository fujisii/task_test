<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class TestController extends Controller
{
    //
    public function index()
    {
        $values = Test::all();

        /**
         *  die + var_dump
         */
        // dd($values);

        // compact関数
        // ・controllerからviewに渡すための変数
        // ・複数渡すことができる
        // ・変数名を文字列で記述する
        return view('tests.test', compact('values'));
    }
}
