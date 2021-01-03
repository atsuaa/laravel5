<?php

namespace App\Http\Controllers\Sample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => 'sample/sample'
        ];

        return view('hello.index', $data);
    }

    public function other()
    {
        // リダイレクトレスポンスインスタンスを返す
        return redirect()->route('hello');
    }
}
