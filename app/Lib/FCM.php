<?php
namespace App\Lib;

class FCM {

  function __construct() {

  }

  public function send_notification($registatoin_ids, $notification,$device_type) {
      $url = 'https://fcm.googleapis.com/fcm/send';
      $server_key  =  \App\Models\Admin\Setting::where('name','firebase_server_key')->first()['val'];
      // $notification['click_action'] = "OPEN_ACTIVITY_1";
      if($device_type == config('constant.ANDROID_APP_DEVICE') || $device_type == config('constant.IPHONE_APP_DEVICE')){
        $fields = array(
            'to' => $registatoin_ids,
            'content_available'=> true,
            'notification' => $notification,
        );
      }
      
      else{
        return \General::error_res(' Invalid Device type.');
      }
      $headers = array('Authorization:key='.$server_key,'Content-Type:application/json');

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);     // Disabling SSL Certificate support temporarly
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
      $result = curl_exec($ch);
      $result = json_decode($result,true);
      if ($result == false) {
        $res = \General::error_res('Something went wrong.');
      }elseif ($result['success']  == 1 && $result['failure'] == 0) {
        $res = \General::success_res('Notification send successfully.');
      }else{
        $res = \General::error_res('Can not send Notification as user is logged out.');
      }
      curl_close($ch);
      return $res;
  }
  public function send_notification_with_data($registatoin_ids, $notification,$device_type, $notification_data = []) {
    $url = 'https://fcm.googleapis.com/fcm/send';
    $server_key  =  \App\Models\Admin\Setting::where('name','firebase_server_key')->first()['val'];
    // $notification['click_action'] = "OPEN_ACTIVITY_1";
    if($device_type == config('constant.ANDROID_APP_DEVICE') || $device_type == config('constant.IPHONE_APP_DEVICE')){
      $fields = array(
          'to' => $registatoin_ids,
          'content_available'=> true,
          'notification' => $notification,
          'data' => $notification_data
      );
      \Log::info(json_encode($fields));
    }
    
    else{
      return \General::error_res(' Invalid Device type.');
    }
    $headers = array('Authorization:key='.$server_key,'Content-Type:application/json');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);     // Disabling SSL Certificate support temporarly
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    $result = json_decode($result,true);
    if ($result == false) {
      $res = \General::error_res('Something went wrong.');
    }elseif ($result['success']  == 1 && $result['failure'] == 0) {
      $res = \General::success_res('Notification send successfully.');
    }else{
      $res = \General::error_res('Can not send Notification as user is logged out.');
    }
    curl_close($ch);
    return $res;
}
}