<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HellocController extends Controller
{
    public function index(Request $request, $person)
    {
        $data = [
            'msg' => $person
        ];
        return view('hello.index', $data);
    }

    public function other()
    {
        // リダイレクトレスポンスインスタンスを返す
        return redirect()->route('hello');
    }
}
