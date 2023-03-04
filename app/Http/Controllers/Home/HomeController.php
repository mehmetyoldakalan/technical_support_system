<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\LoginLogs;
use App\Models\ServiceRequest;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user=Auth::user();

        $loginLog=LoginLogs::where('email',$user->email)->limit(4)->orderBy('id','desc')->get();

        $currency = json_decode(file_get_contents('https://api.genelpara.com/embed/para-birimleri.json'), true);

        if($user->permission=='customer')
        {
            $data['current_requests']=ServiceRequest::where('user_id',$user->id)->where('status','on')->count();
            $data['closed_requests']=ServiceRequest::where('user_id',$user->id)->where('status','off')->count();
            $data['total_requests']=ServiceRequest::where('user_id',$user->id)->count();

            $data['support_records']=Support::where('user_id',$user->id)
                ->where('status','on')
                ->limit(4)
                ->get();
        }

        return view('app.index',[
            'permission'=>$user->permission,
            'user'=>$user,
            'data'=>$data??[],
            'loginLog'=>$loginLog,
            'currency'=>$currency
        ]);
    }
}
