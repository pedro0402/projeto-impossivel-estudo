<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function teste()
    {
        return response()->json([
            'mensagem' => 'API funcionando.'
        ], 200);
    }
}
