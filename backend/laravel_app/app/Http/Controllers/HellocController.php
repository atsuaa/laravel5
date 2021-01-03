<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HellocController extends Controller
{
    private $f_name;

    public function __construct()
    {
        $this->f_name = 'sample.txt';
    }

    public function index()
    {
        $sample_msg = $this->f_name;
        $sample_data = Storage::get($this->f_name);
        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL, $sample_data)
        ];
        return view('hello.index', $data);
    }

    public function other($msg)
    {
        Storage::append($this->f_name, $msg);
        return redirect()->route('hello');
    }
}
