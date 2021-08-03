<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    public function __construct()
    {
    	 
    }
    public function getSession($id){
         // session()->forget('2fa_failled_attempt');

        if (session()->has('2fa_failled_attempt') && session('2fa_failled_attempt')['count'] > 3 && session('2fa_failled_attempt')['id'] == $id) {
            \Log::info($id);
            session()->forget('2fa_failled_attempt');
            return 'you are bloked.';
        }
        if (!session()->has('2fa_failled_attempt')) {
            \Log::info('new');
            $data = ['id' => $id,'count'=>1];
            session(['2fa_failled_attempt' => $data]);
        }elseif(session('2fa_failled_attempt')['id'] != $id){
            \Log::info('restrt');  
            $data = ['id' => $id,'count'=>1];
            session(['2fa_failled_attempt' => $data]);
        }elseif(session('2fa_failled_attempt')['id'] == $id){
            \Log::info('old');
             // $data = ['id' => $id,'count'=>$count];
            session(['2fa_failled_attempt' => session('2fa_failled_attempt')]);
        }
        if (true) {
            $fid = session('2fa_failled_attempt')['id'];
            $fcount = session('2fa_failled_attempt')['count']+1;
            session(['2fa_failled_attempt'=> ['id'=>$fid,'count'=>$fcount]]);
        }
        \Log::info(session('2fa_failled_attempt'));
    }

    public function index(){
        dd(session()->get('hey'));
    	if (!\Auth::guard('admin')->check()) {
    		return \Redirect::to('/');
    	}
    	return \Redirect::to('admin/dashboard');
    }
    public function getLogin($sec_token = "") {
       
        $s = \App\Models\Admin\Settings::get_config('login_url_token');

        if ($sec_token != $s['login_url_token']) {
            return abort('404');
        }
        if (\Auth::guard("admin")->check()) {
            return \Redirect::to("admin/dashboard");
        }
        $view_data = [
            'header' => [
                'title' => config('constant.PLATFORM_NAME'),
            ],
            'body'=> [
                'logger' => 'Admin',
            ]
        ];
        return view('admin.login',$view_data);
    }

}
