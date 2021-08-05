<?php
namespace App\Lib;

class SendOTP  {

  function __construct() {

  }

  public function send_OTP($param) {
    if(env('APP_ENV') == 'local'){
      return $res =  \General::success_res();
    }

    // CURLOPT_URL => "https://api.msg91.com/api/v5/otp?extra_param=&unicode=&authkey=".$authkey."&template_id=".$template_id."&mobile=".$mobile."&invisible=&otp=$otp&userip=&email=&otp_length=&otp_expiry=",
    $authkey = '9453AgDZSyRJ3601d3314P123';
    $template_id = '602129fb93692057a767fb07';
    $mobile = $param['mobile'];
    $otp = $param['otp'];
    $ip = $param['last_ip'];
   
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.msg91.com/api/v5/otp?authkey=".$authkey."&template_id=".$template_id."&mobile=".$mobile."&otp=".$otp,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTPHEADER => array(
        "content-type: application/json"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
      $res = \General::error_res();
    } else {
      $res =  \General::success_res();
    }
    return $res;
  }
}