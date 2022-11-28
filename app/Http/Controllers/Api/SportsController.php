<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    use Response;

    public function index(){
        $data = [1,2,3,4,5,6];
        return $this->success($data);
    }

    public function show(){
        return $this->fail([]);
    }
}
