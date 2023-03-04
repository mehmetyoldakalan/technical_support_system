<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        $user=Auth::user();

        $settingsData=User::where('id',$user->id)->first();

        return view('app.customer.settings',['settings'=>$settingsData]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'country'=>'required',
            'city'=>'required'
        ]);

        if(!is_null($request->current_pass)or !is_null($request->new_pass) or !is_null($request->new_pass_validate))
        {
            $request->validate([
               'current_pass'=>'required',
               'new_pass'=>'required',
               'new_pass_validate'=>'required'
            ]);

            if($request->new_pass!=$request->new_pass_validate)
            {
                return redirect()->action([SettingsController::class,'index'])->withErrors([
                    'error'=>'Current password is not correct'
                ]);
            }
            else
            {
                if(Auth::attempt(['email'=>$request->email,'password'=>$request->current_pass]))
                {
                    User::where('id',Auth::user()->id)->update([
                        'password'=>Hash::make($request->new_pass)
                    ]);
                }
                else
                {
                    return redirect()->action([SettingsController::class,'index'])->withErrors([
                        'error'=>'Passwords not mathced'
                    ]);
                }
            }
        }

        $exceptList=['_token','new_pass','current_pass','new_pass_validate'];

        User::where('id',Auth::user()->id)->update($request->except($exceptList));

        return redirect()->action([SettingsController::class,'index']);
    }
}
