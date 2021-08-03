@extends('layouts.admin')
<style>
.swal2-container .swal2-top-end .swal2-backdrop-show{
  font-size: 30px!important;
}
</style>
@section('content')
<?php
$settings = $body['settings'];
?>
<section class="content-wrapper">
  <div class="aside-panel"></div>       
  <div class="container-fluid">     
    <div class="page-header">
      <h1>Tabs</h1>
      <ul class="breadcrumbs">
        <li>Components</li>
        <li>Tabs</li>
      </ul>
    </div>      
    <div class="page-content pb40">
      <div class="row">
        <div class="col-sm-12">
          <div class="tabs-wrapper mb40">
            <ul class="nav nav-tabs button-indicator">
              <li class="waves-effect waves-theme active"><a href="#general" data-toggle="tab" aria-expanded="true">Genaral</a></li>
              <li class="waves-effect waves-theme"><a href="#changepassword" data-toggle="tab" aria-expanded="false">Change Password</a></li>
              <li class="tab-active-border" style="left: 0px; width: 67px;"></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade active in" style="padding: 0px;" id="general">
                <form id="g_setting" class="form-horizontal paper p30" action="{{url('admin/set-setting')}}" method="post">
                  @csrf
                  <input type="hidden" name="type" value="general">
                  <div class="form-group mt20">
                    <label class="col-sm-2 h3 mt20 text-uppercase">Login Key:</label>
                    <div class="col-sm-5">
                      <div class="input-field mt20">
                        <label for="loginkey" class="sr-only active">Login Key:</label>
                        <input autocomplete="off" name="loginkey" class="form-control" type="text" id="loginkey" placeholder="Loginkey" value="{{$settings['login_url_token']}}">
                        <div class="input-highlight"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group clearfix">
                   <div class="col-sm-7">
                    <button class="btn indigo pull-right" id="general_save">Save</button>
                  </div>  
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="changepassword">
              <form id="cng_password" class="form-horizontal paper p30" action="{{url('admin/set-setting')}}" method="post">
                <input type="hidden" name="type" value="password">
                @csrf
                <div class="form-group row">
                   <label class="col-sm-3 h3 mt20 text-uppercase">Old Password :</label>
                   <div class="col-sm-5">
                    <div class="input-field mt20">
                      <label for="oldpassword" class="sr-only active">Old password:</label>
                      <input autocomplete="off" name="old_password" type="password" id="old_password" placeholder="">
                      <div class="input-highlight"></div>
                    </div>
                  </div>
                  <div class="col-sm-5"></div>
                </div>
              <div class="form-group  row">
               <label class="col-sm-3 h3 mt20 text-uppercase">New Password :</label>
               <div class="col-sm-5">
                <div class="input-field mt20">
                  <label for="password" class="sr-only active">New password:</label>
                  <input autocomplete="off" name="new_password" type="password" id="new_password" placeholder="">
                  <div class="input-highlight"></div>
                </div>
              </div>
              <div class="col-sm-5"></div>
            </div>
            <div class="form-group  row">
              <label class="col-sm-3 h3 mt20 text-uppercase">Confirm Password :</label>
              <div class="col-sm-5">
                <div class="input-field mt20">
                  <label for="c_password" class="sr-only active">Confirm password:</label>
                  <input name="confirm_password" type="password" id="confirm_password" placeholder="">
                  <div class="input-highlight"></div>
                </div>
              </div>
            </div>
            <div class="form-group clearfix">
              <div class="col-sm-8 mt20">
              </form>
              <button class="btn indigo pull-right" id="change_pwd"></i>Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>     
</div>
</div>
</section>
@endsection

@section('footer')
<script>

 $('#general_save').click(function(e){
   e.preventDefault(); 
   $('#g_setting').ajaxForm(function(res){

     if(res.flag == 1){
       notify(res.flag,res.msg);
     }else{
       notify(res.flag,res.msg);
     }
   }).submit();
 });
 $('#change_pwd').on('click', function(event) {
   event.preventDefault();
   $('#cng_password').ajaxForm(function (res) {
     if (res.flag == 1) {
       notify(res.flag,res.msg);
       $('.pwd-msg').html('');
     } else {
       notify(res.flag,res.msg);
     }
     $('#old_password').val('');
     $('#new_password').val('');
     $('#confirm_password').val('');
   }).submit();
 });
 $('#pwd_cancel').click(function () {
   $('#old_password').val('');
   $('#new_password').val('');
   $('#confirm_password').val('');
   $('.pwd-msg').html('');
 });


</script>

@stop