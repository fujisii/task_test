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

        $collection = collect([1, 2, 3, 4, 5, 6, 7]);

        $chunks = $collection->chunk(4);

        $chunks->toArray();

        /**
         *  die + var_dump
         */
        dd($chunks);

        // compact関数
        // ・controllerからviewに渡すための変数
        // ・複数渡すことができる
        // ・変数名を文字列で記述する
        return view('tests.test', compact('values'));
    }
}
