<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{$header['title']}}</title>
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.form.min.js')}}"></script>
    <script src="{{url('assets/js/common.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   
  <link href="{{url('assets/css/admin_app.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('assets/css/sweetalert.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('assets/css/toaster.min.css')}}" rel="stylesheet" type="text/css">
  
  <style>
    .mtt-2{
      padding-top: 5px;
    }
    .tab-content>.active {
        padding: 0;
    }
  
  </style>
  <style>
.breadcrumb-item.active {
  color: #858796;
}

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.35rem;

}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #4e73df;
  background-color: #fff;
  border: 1px solid #dddfeb;
  font-size: 35px!important;
}

.page-link:hover {
  z-index: 2;
  color: #224abe;
  text-decoration: none;
  background-color: #eaecf4;
  border-color: #dddfeb;
}

.page-link:focus {
  z-index: 3;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.35rem;
  border-bottom-left-radius: 0.35rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.35rem;
  border-bottom-right-radius: 0.35rem;
}

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #4e73df;
  border-color: #4e73df;
}

.page-item.disabled .page-link {
  color: #858796;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dddfeb;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}
.theme-dark .pagination a, .theme-dark .pagination li:first-child, .theme-dark .pagination li:last-child {

    font-size: 20px;
}

  </style>
   @yield('header')
</head>
<body class="theme-dark light-skin ev-page" data-spy="scroll" data-target="#myScrollspy">
<input type="hidden" id="token" value="{{csrf_token()}}">
<div class="main-wrapper side-menu">

<!-- HEADER-MENU -->  
  <header class="header-bar toggler-hide theme">  
    <div class="toolbar">
          
      <div class="pull-right search-wrapper">
        <form class="header-bar-search input-field pull-left hidden-xs mr30">
          <input class="search" type="text" placeholder="Search...">
        </form>

        <a href="ajax/notifications.html" class="aside-panel-trigger icon action mdi mdi-bell"><span class="badge red">2</span></a>

        <a href="ajax/contacts-panel.html" class="aside-panel-trigger icon action mdi mdi-account-multiple"></a>

        <a href="{{url('admin/logout')}}" class="icon action mdi mdi-google-circles-group" title="Logout"></a>

        <i class="icon action mdi toolbar-search visible-xs-inline-block"></i>

        <form class="search-form">          
          <div class="input-field input-group">
            <span class="input-group-btn no-border">
              <i class="icon action mdi toolbar-back"></i>
            </span>
            <input type="search" class="input no-border" placeholder="Search...">
          </div>
        </form>
        {{-- <div class="dropdown hb-user-dropdown pull-right">
          <img class="circle hb-profile" data-toggle="dropdown" src="" alt="">
          <ul class="dropdown-menu top-right">
            <li><a href="inbox.html">Inbox</a></li>
            <li><a href="#:;">Profile</a></li>
              <li><a href="#:;">Settings</a></li>
              <li><a href="#:;">Help</a></li>
              <li class="divider"></li>
              <li><a href="">Logout</a></li>
            </ul>
        </div><!-- /.dropdown --> --}}
      </div><!-- /.pull-right -->

      <div class="title brand-name">FreshYum</div>
    </div><!-- /.toolbar -->
  </header>
 @include('admin.sidebar')