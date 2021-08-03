<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends Model implements Authenticatable
{
    use AuthenticableTrait;

    public $table = 'admin';
   
    protected $hidden = array('password', 'remember_token', 'auth_token', 'device_token', 'device_type');
    public static $id_prefix = 'aid_';
    protected $fillable = array('username', 'email', 'password', 'avatar', 'mobile', 'status','remember_token');

    public static function doLogin($param){
        if(isset($param['remember']))
        {
            \Cookie::get("remember",1);
            if($param['remember']=='on')
                $param['remember']=1;
            else
                $param['remember']=0;
        }
        $user = self::where("email", $param['email'])->first();
        $res['data']=$user;
        $res['flag']=0;
        if (is_null($user)) {
            $res['flag']=0;
            return $res;
        }
        if (!\Hash::check($param['password'], $user->password)) {
            $res['flag']=0;
            return $res;
        }
        if(isset($param['remember']) && $param['remember']==1)
        {
            $auth_token = \App\Models\Admin\Token::generate_auth_token();
            
            $token_data = ['admin_id' => $user->id,'token' => $auth_token,'type' => 'auth'];
            \App\Models\Admin\Token::save_token($token_data);
            \Auth::guard("admin")->loginUsingId($user->id,true);
        }
        else{
            \Auth::guard("admin")->loginUsingId($user->id);
        }
        
        // \Auth::guard('user')->logout();
        $res['flag']=1;
        return $res;
    }
    public static function setPassword($param){
        $password = \Hash::make($param['confirm_password']);
        $user = self::where('id',\Auth::guard('admin')->user()->id)->first();
        if (\Hash::check($param['old_password'], $user->password)) {
            if($param['new_password'] != '' && $param['confirm_password'] != '' && $param['new_password'] == $param['confirm_password']){
                self::where('id',\Auth::guard('admin')->user()->id)->update(['password'=>$password]);
                $res = \General::success_res('Password saved successfully.');
            }else{
                $res = \General::error_res('New password and confirm password must be same.');                
            }
        }else{
            $res = \General::error_res('Old password not match.');
        }
        return $res;
    }
}
