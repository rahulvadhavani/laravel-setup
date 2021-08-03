<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = ['name','val'];
    public $timestamps = false;

    public static function get_config($name = "")
        {
            $data = [];
            if(is_string($name) && $name != "")
            {
                $settings = self::where("name",$name)->skip(0)->take(1)->get();   
            }
            else if(is_array($name) && !empty ($name))
            {
                $settings = self::whereIn("name",$name)->get();
            }
            else
            {
                $settings = self::where("autoload","=","1")->get();
            }
            if(isset($settings[0]) && isset($settings[0]->name))
            {
                $settings = $settings->toArray();
                
                foreach ($settings as $setting) {
                    $data[$setting['name']] = $setting['val'];
                }
            }
            return $data;
        }

        public static function setGeneralSettings($param){
            $setting = self::where('name','login_url_token')->update(['val'=>$param['loginkey']]);
            $res = \General::success_res('Setting save successfully.');
            return $res;
        }
}
