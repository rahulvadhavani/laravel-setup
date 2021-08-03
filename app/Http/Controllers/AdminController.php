<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    private static $bypass_url = ['getIndex', 'getLogin', 'postLogin','getLogout'];
    public function __construct()
    {
    	 $this->middleware('AdminAuth', ['except' => self::$bypass_url]);
    }

    public function index(){

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

    public function postLogin(Request $req) {
        $view_data = [
            'header' => [
                'title' => '',
            ],
            'body'=> [
                'logger' => 'Admin',
                'type' => 'A'
            ]
        ];
        
         $custome_msg = [
            'g-recaptcha-response.required'   => 'Please ensure that you not robot.',
        ];
        
        $validator = \Validator::make(\Input::all(), \Validation::get_rules("admin", "login"));
        if ($validator->fails()) {
            $messages = $validator->messages();
            $error = $messages->all();
            
            return view('admin.login',$view_data)->withErrors($validator);
        }

        $param = $req->input();
        $res = \App\Models\Admin\Users::doLogin($param);

        if ($res['flag'] == 0) {
            return view('admin.login',$view_data)->withErrors('Wrong User Id or Password !!');
        }

        return \Redirect::to("admin/dashboard");
    }

    public function getLogout() {
      
        \Auth::guard('admin')->logout();
        $s = \App\Models\Admin\Settings::get_config('login_url_token');
        return redirect("admin/login/" . $s['login_url_token']);
    }
    
    public function getDashboard() {
        
        $data = [
        ];
        $view_data = [
            'header' => [
                "title" => 'Dashboard | Admin Panel ',
            ],
            'body' => [
                'id'    => 'dashboard',
                'label' => 'Dashboard',
            ],
        ];
        return view("admin.dashboard", $view_data);
    }
    public function getFormElement() {
        
        $data = [
        ];
        $view_data = [
            'header' => [
                "title" => 'Dashboard | Admin Panel ',
            ],
            'body' => [
                'id'    => 'dashboard',
                'label' => 'Dashboard',
            ],
        ];
        return view("admin.formelement", $view_data);
    }
    public function getSetting(){
        $mch = \Auth::guard('admin')->user()->toArray();
        $settings = app('settings');
        $view_data = [
            'header' => [
                'title' => 'Settings | '.config('constant.PLATFORM_NAME'),
                'css'=>[],
                'js'=>[],
            ],
            'body'=> [
                'id'=>'settings',
                'label'=>'Settings',
                'settings'=>$settings,
                 'user'  => $mch,
            ],
            'footer'=>[
                'js'=>['bootstrap-datepicker.min.js'],
            ],
        ];
        return view('admin.setting',$view_data);
    }
    public function postSetSetting(){
        $param = \Input::all();
        if ($param['type'] == 'general') {
            $res = \App\Models\Admin\Settings::setGeneralSettings($param);
        }elseif ($param['type'] == 'password') {
            $res = \App\Models\Admin\Users::setPassword($param);
        }
        return $res;
    }
    public function getCategory() {

        $view_data = [
            'header' => [
                "title" => 'Category | Admin Panel ',
            ],
            'body' => [
                'id'    => 'category',
                'label' => 'Category',
                'category' => app('category'),
            ],
        ];
        return view("admin.category", $view_data);
    }

    public function postAddCategory(){
        $param = \Input::all();
        $validator = \Validator::make($param, \Validation::get_rules("admin", "add_category"));
        if ($validator->fails()) {
            $messages = $validator->messages();
            $error = $messages->all();
            return \General::error_res($error['0']);
           
        }
        $res = \App\Models\Admin\Category::addCategory($param);
        return $res;
    }
    public function postCategoryFilter(){
        $param = \Input::all();
        $categoey = \App\Models\Admin\Category::filter_category($param);
        $res = \General::success_res();
        $res['blade'] = view("admin.category_filter", $categoey)->render();
        $res['total_record'] = $categoey['total_record'];
        return $res;
    }
    public function postDeleteCategory(){
        $param = \Input::all();
        $validator = \Validator::make($param, \Validation::get_rules("admin", "delete_category"));
        if ($validator->fails()) {
            $messages = $validator->messages();
            $error = $messages->all();
            return \General::error_res($error['0']);
           
        }
        $res = \App\Models\Admin\Category::deleteCategory($param);
        return $res;

    }
    public function postUpdateCategory(){
        $param = \Input::all();
        $validator = \Validator::make($param, \Validation::get_rules("admin", "update_category"));
        if ($validator->fails()) {
            $messages = $validator->messages();
            $error = $messages->all();
            return \General::error_res($error['0']);
        }
        $res = \App\Models\Admin\Category::updateCategory($param);
        return $res;

    }
    public function getFoods() {

        $view_data = [
            'header' => [
                "title" => 'Foods | Admin Panel',
            ],
            'body' => [
                'id'    => 'foods',
                'label' => 'Foods',
                'category' => app('category'),
            ],
        ];
        return view("admin.foods", $view_data);
    }
    public function getAddFood() {

        $view_data = [
            'header' => [
                "title" => 'Foods | Admin Panel',
            ],
            'body' => [
                'id'    => 'foods',
                'label' => 'Add Foods',
                'category' => app('category'),
            ],
        ];
        return view("admin.add_foods", $view_data);
    }
    function postAddFood(){
        $param = \Input::all();
        
        $validator = \Validator::make($param, \Validation::get_rules("admin", "add_foods"));
        if ($validator->fails()) {
            $messages = $validator->messages();
            $error = $messages->all();
            return \General::error_res($error['0']);
        }
       
        $res = \App\Models\Admin\Foods::addFood($param);
        return $res;
    }
    public function postFoodFilter(){
        $param = \Input::all();
        $food = \App\Models\Admin\Foods::filter_foods($param);
        $res = \General::success_res();
        $res['blade'] = view("admin.food_filter", $food)->render();
        $res['total_record'] = $food['total_record'];
        return $res;
    }
    public function postDeleteFood(){
        $param = \Input::all();
        $validator = \Validator::make($param, \Validation::get_rules("admin", "delete_food"));
        if ($validator->fails()) {
            $messages = $validator->messages();
            $error = $messages->all();
            return \General::error_res($error['0']);
           
        }
        $res = \App\Models\Admin\Foods::deleteFood($param);
        return $res;

    }
    public function getFoodInfo($id='') {

        $food =  \App\Models\Admin\Foods::foodInfo($id);
        if (is_null($food)) {
            return abort('404');
        }
        $view_data = [
            'header' => [
                "title" => 'Food-Info | Admin Panel',
            ],
            'body' => [
                'id'    => 'foods',
                'label' => 'Food-Info',
                'category' => app('category'),
                'food' => $food,
            ],
        ];
        return view("admin.food-info", $view_data);
    }
    public function getEditFood($id='') {

        $food =  \App\Models\Admin\Foods::foodInfo($id);
        if (is_null($food)) {
            return abort('404');
        }
        $view_data = [
            'header' => [
                "title" => 'Edit-Food | Admin Panel',
            ],
            'body' => [
                'id'    => 'foods',
                'label' => 'Edit-Food',
                'category' => app('category'),
                'food' => $food,
            ],
        ];
        return view("admin.edit_food", $view_data);
    }
}
