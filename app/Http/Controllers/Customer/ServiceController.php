<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }
    public function index()
    {

    }
    final public function preCreate()
    {
        $mainServicesList=Service::
            where('type','main')
            ->where('status','on')
            ->get();

        return view('app.customer.services.pre_create_request',['mainServicesList'=>$mainServicesList]);
    }
    final public function create()
    {
        $servicesList=Service::all();
        return view('app.customer.services.create',[
            'servicesList'=>$servicesList
        ]);
    }
    private function save_img($request,$img)
    {
        $extension=$request->file($img)->getClientOriginalExtension();
        $extList=['png','jpg','jpeg','jfif'];
        if(in_array($extension,$extList))
        {
            $imgName=Str::random(10).$request->file($img)->getClientOriginalName();
            $request->file($img)->move('storage',$imgName);
            return $imgName;
        }
        else{
            return false;
        }
    }
    final public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'request_details'=>'required',
            'contact_time'=>'required',
            'contact_type'=>'required',
            'services_id'=>'required'
        ]);
        if($validator->fails())
        {
            return back()->withErrors(['error'=>'Eksik Bilgi Sağlandı']);
        }
        if($request->hasFile('request_img0'))$img0Name=$this->save_img($request,'request_img0');
        if($request->hasFile('request_img1'))$img1Name=$this->save_img($request,'request_img1');
        if($request->hasFile('request_img2'))$img2Name=$this->save_img($request,'request_img2');
        if($request->hasFile('request_img3'))$img3Name=$this->save_img($request,'request_img3');


        if(!isset($request->onsite_service))
        {
            $request->onsite_service='no';
        }else
        {
            $request->onsite_service='yes';
        }

        $exceptList=['_token','request_img0','request_img1','request_img2','request_img3','onsite_service'];

        ServiceRequest::create(
            array_merge(
                $request->except($exceptList),
                [
                    'user_id'=>$this->user->id,
                    'request_img0'=>$img0Name??NULL,
                    'request_img1'=>$img1Name??NULL,
                    'request_img2'=>$img2Name??NULL,
                    'request_img3'=>$img3Name??NULL,
                ]
            )
        );
        return redirect()->action([ServiceController::class,'current_requests'])->with('status','success');
    }

    public function past_requests()
    {
        $pastRequest=ServiceRequest::where('user_id',$this->user->id)
            ->where('status','off')
            ->get();

        return view('app.customer.services.past_requests',['pastRequest'=>$pastRequest]);
    }

    public function past_requests_details($id)
    {
        $requestDetails=ServiceRequest::where('id',$id)->first();
        return view('app.customer.services.past_request_details',['requestDetails'=>$requestDetails]);
    }

    public function current_requests()
    {
        $userId=Auth::user()->id;

        $requestList=ServiceRequest::where('user_id',$userId)->get();

        return view('app.customer.services.current_requests',['requestList'=>$requestList]);
    }
    public function current_requests_details($id)
    {
        $requestDetails=ServiceRequest::where('id',$id)->first();
        return view('app.customer.services.current_request_details',['requestDetails'=>$requestDetails]);
    }
}
