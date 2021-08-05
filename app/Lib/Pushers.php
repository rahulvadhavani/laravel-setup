<?php 
namespace App\Lib;

use Pusher;
class Pushers {

   public static function initialize_pusher(){
      $options = array(
         'cluster' => env('PUSHER_APP_CLUSTER')
      );
      $pusher = new Pusher\Pusher(
         env('PUSHER_APP_KEY'),
         env('PUSHER_APP_SECRET'),
         env('PUSHER_APP_ID'),
         $options
      );  
      return $pusher;
    }
    
   public static function send_event($param){
      $pusher = self::initialize_pusher();
      $pusherData =  $pusher->trigger($param['channel'],$param['event'],$param['data']);
      return $pusherData;
   }
}