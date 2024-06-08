<?php

namespace App\Http\Controllers;

use App\Models\Promocode;
use Illuminate\Http\Request;

class PromocodeApiController extends Controller
{
    public function check(string $code)
    {
        $result = Promocode::where('code', $code)->first();
        if($result!=null){
            return response()->json([
                'price' => $result->price
            ]);
        }
        return response()->json([
            'price' => 0
        ]);
    }
}
