<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request,$next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }

    public function index()
    {
        $supports=Support::where('user_id',$this->user->id)
            ->get();

        return view('app.customer.support',['supports'=>$supports]);
    }

    public function store(Request $request)
    {
        Support::create(array_merge($request->except('_token'),['user_id'=>$this->user->id]));

        return redirect()->action([SupportController::class,'index']);
    }
    public function destroy($id)
    {
        Support::find($id)->delete();

        return redirect()->action([SupportController::class,'index'])->with('status','success');
    }
}
