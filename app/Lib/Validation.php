<?php

namespace App\lib;

class Validation {
    private static $rules = array(        
        "user" => [
            "login"=>[
                "email"=>'required|email|exists:users,email',
                "password"=>'required'
            ],
            
        ],
        
        "admin" => [
            "login"=>[
                "email"=>'required|email|exists:users,email',
                "password"=>'required'
            ],
            "add_category"=>[
                "parent_category"=>'nullable|numeric|exists:category,id',
                "category_name"=>'required|min:3|max:50',
                "category_image" => 'required|mimes:png,jpeg,jpg',
            ],
            "delete_category"=>[
                "record_id"=>'required|numeric|exists:category,id',
            ],
            "delete_food"=>[
                "record_id"=>'required|numeric|exists:foods,id',
            ],
             "update_category"=>[
                "category_id"=>'required|numeric|exists:category,id',
                "parent_category"=>'nullable|numeric|exists:category,id',
                "category_name"=>'required|min:3|max:50',
                "category_image" => 'nullable|mimes:png,jpeg,jpg',
            ],
            "add_foods"=>[
                "food_name"=>'required|min:3|max:50',
                "food_type"=>'required|numeric|between:0,1',
                "price"=>'required|numeric',
                "category"=>'required|numeric|exists:category,id',
                "related_category"=>'required',
                "main_image"=>'required|image|mimes:png,jpeg,jpg|max:2000',
                "images"=>'nullable',
                "images.*"=>'nullable|image|mimes:png,jpeg,jpg|max:2000',
                "description"=>'required|min:3',
            ],
           
        ],
    );

    public static function get_rules($type, $rules_name) {
        if (isset(self::$rules[$type][$rules_name]))
            return self::$rules[$type][$rules_name];
        return array();
    }
    public static function validate($type,$rule_name,$custom_msg=[],$args_param=[],$niceNames=[]){
        
        $rules = self::get_rules($type,$rule_name);
       
        if(count($args_param)>0){
            $param=$args_param;
        }else{
            $param=\Input::all();
        }
        
        if(count($custom_msg) > 0){
            
            $validator = \Validator::make($param, $rules,$custom_msg);
        }else{
            $validator = \Validator::make($param, $rules);
        }
        $validator->setAttributeNames($niceNames); 

        if ($validator->fails()) {
            $error = $validator->messages()->all();
            $msg = isset($error[0])?$error[0]:"Please fill in the required field.";
            $json = \General::validation_error_res($msg);
            $json['data'] = [$msg];
            return $json;
        }
        
        return \General::success_res();
    }
    
    public static function custom_validate($param,$rules,$custom_msg=[],$custom_names=[],$sometimes=[]){
        $json=[];
        if(count($custom_msg) > 0){
            $validator = \Validator::make($param, $rules,$custom_msg);
        }else{
            $validator = \Validator::make($param, $rules);
        }
        if(!empty($sometimes)){
            foreach ($sometimes as $some){
                if(isset($some['field']) && isset($some['rules']) && isset($some['callback'])){
                    $validator->sometimes($some['field'],$some['rules'],$some['callback']);
                }
            }
        }
        
        if(!empty($custom_names)){
            $validator->setAttributeNames($custom_names); 
        }
        if ($validator->fails()) {
            $error = $validator->messages()->all();
            $msg = isset($error[0])?$error[0]:"Please fill in the required field.";
            $json = \General::validation_error_res($msg);
            $json['data'] = [$msg];
            return $json;
        }
        $json = \General::success_res();
        return  $json;
    }
}
