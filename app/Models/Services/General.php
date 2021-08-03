<?php

namespace App\Models\Services;
use Illuminate\Support\Facades\Storage;

class General{

    public static function check_facebook_access_token($token) {
        $url = "https://graph.facebook.com/me?fields=email,name,id,picture&access_token=".$token;
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 2
        ));

        $result = curl_exec($ch);
        $result = json_decode($result,true);
        curl_close($ch);
        $res = \General::error_res("not_authorise");
        if(isset($result['name']))
        {
        
            // $img = 'user-avatar/'.$result['id'].'.png';
            // $s3_store = Storage::disk('s3')->put($img,file_get_contents($result['picture']['data']['url']), 'public');
            // if ($s3_store) {
            //     $avatar =  Storage::disk('s3')->url($img);
            // }
          
            $res = \General::success_res();
            $res['data']['facebook_id'] = $result['id'];
            $res['data']['name'] = $result['name'];
            $res['data']['profile_img'] = $result['id'].".png";
            $res['data']['fb_profile_img'] = $result['picture']['data']['url'];
            $res['data']['email'] = isset($result['email']) ? $result['email'] : "";
            
            return $res;
        }
        
        return $res;
    }
    public static function check_google_access_token($token) {

        $url = "https://www.googleapis.com/oauth2/v3/userinfo?access_token=" . $token;
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 2
        ));

        $result = curl_exec($ch);
        $result = json_decode($result,true);
        curl_close($ch);
        if(isset($result['email']))
        {

            $res = \General::success_res();
            $res['data']['google_id'] = $result['sub'];
            $res['data']['name'] = $result['name'];
            $res['data']['profile_img'] = $result['sub'].".png";
            $res['data']['google_profile_img'] = $result['picture'];
            $res['data']['email'] = $result['email'];
            return $res;
        }
        $res = \General::error_res("not_authorise");
        return $res;
    }

}