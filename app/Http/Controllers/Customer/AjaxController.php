<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_support_response(Request $request)
    {
        $response=Support::find($request->id);
        return response()->json($response);
    }
}
