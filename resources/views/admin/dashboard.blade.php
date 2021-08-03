@extends('layouts.admin')
@section('header')
<style type="text/css">
   .icon-dash{
   font-size:50px;
   text-align:right;  
   }
</style>
@stop
@section('content')
<?php

?>

<section class="content-wrapper">

  <!-- =========================================================== -->
  <!-- Start page content  -->
  <!-- =========================================================== -->

    <div class="aside-panel"></div>       
  
    <div class="container-fluid">
      <div class="page-header">
        <h1>Dashboard</h1>
        <ul class="breadcrumbs">
          <li>Dashboard</li>
          <li>Sales</li>
        </ul>
      </div>

      <div class="page-content">
        <div class="switch-toggle mt20 mb10">       

          <input id="day" name="stats" type="radio" value="today">
          <label for="day">Today</label>

          <input id="week" name="stats" type="radio" value="week" checked="">
          <label for="week">This Week</label>

          <input id="month" name="stats" type="radio" value="month">
          <label for="month">This Month</label>

          <input id="year" name="stats" type="radio" value="year">
          <label for="year">This Year</label>

          <input id="alltime" name="stats" type="radio" value="alltime">
          <label for="alltime">All time</label>

          <a class="btn theme"></a>

        </div><!-- /.switch-toggle -->

        <div id="statisticsTiles" class="row stat-wrapper stat-sortable">
          <!-- /.col- -->

          <!-- /.col- -->

          <!-- /.col- -->

          <!-- /.col- -->
        <div class="col-xs-6 col-sm-3">

            <div id="statCard1" class="card mt20" style="background-color: rgb(255, 193, 7);">      
              <div class="stat-body sort-handle">
                <select id="colorselector_1" class="color-selector" style="display: none;">
                  <option value="pink" data-color="#e91e63">Pink</option>
                  <option value="lavendar" data-color="#7C4DFF">Lavendar</option>
                  <option value="purple" data-color="#9c27b0">Purple</option>
                  <option value="deep-purple" data-color="#673ab7">Deep Purple</option>
                  <option value="cyan" data-color="#00bcd4">Cyan</option>
                  <option value="blue-dark" data-color="#1266F1">Blue Dark</option>
                  <option value="indigo" data-color="#3f51b5">Indigo</option>
                  <option value="midnight" data-color="#313447">Midnight</option>
                  <option value="lime" data-color="#cddc39">Lime</option>
                  <option value="light-green" data-color="#8bc34a">Light Green</option>
                  <option value="cyan-dark" data-color="#0097a7">Cyan Dark</option>
                  <option value="teal" data-color="#009688">Teal</option>
                  <option value="orange" data-color="#ff9800">Orange</option>
                  <option value="amber" data-color="#ffc107">Amber</option>
                  <option value="blue-grey" data-color="#607d8b">Blue Grey</option>
                  <option value="mda" data-color="#4a7885">MDA</option>
                  </select><div class="dropdown dropdown-colorselector"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorselector" style="background-color: rgb(255, 193, 7);"></span></a><ul class="dropdown-menu top-left"><li><a class="color-btn" href="#" data-color="#e91e63" data-value="pink" title="Pink" style="background-color: rgb(233, 30, 99);"></a></li><li><a class="color-btn" href="#" data-color="#7C4DFF" data-value="lavendar" title="Lavendar" style="background-color: rgb(124, 77, 255);"></a></li><li><a class="color-btn" href="#" data-color="#9c27b0" data-value="purple" title="Purple" style="background-color: rgb(156, 39, 176);"></a></li><li><a class="color-btn" href="#" data-color="#673ab7" data-value="deep-purple" title="Deep Purple" style="background-color: rgb(103, 58, 183);"></a></li><li><a class="color-btn" href="#" data-color="#00bcd4" data-value="cyan" title="Cyan" style="background-color: rgb(0, 188, 212);"></a></li><li><a class="color-btn" href="#" data-color="#1266F1" data-value="blue-dark" title="Blue Dark" style="background-color: rgb(18, 102, 241);"></a></li><li><a class="color-btn" href="#" data-color="#3f51b5" data-value="indigo" title="Indigo" style="background-color: rgb(63, 81, 181);"></a></li><li><a class="color-btn" href="#" data-color="#313447" data-value="midnight" title="Midnight" style="background-color: rgb(49, 52, 71);"></a></li><li><a class="color-btn" href="#" data-color="#cddc39" data-value="lime" title="Lime" style="background-color: rgb(205, 220, 57);"></a></li><li><a class="color-btn" href="#" data-color="#8bc34a" data-value="light-green" title="Light Green" style="background-color: rgb(139, 195, 74);"></a></li><li><a class="color-btn" href="#" data-color="#0097a7" data-value="cyan-dark" title="Cyan Dark" style="background-color: rgb(0, 151, 167);"></a></li><li><a class="color-btn" href="#" data-color="#009688" data-value="teal" title="Teal" style="background-color: rgb(0, 150, 136);"></a></li><li><a class="color-btn" href="#" data-color="#ff9800" data-value="orange" title="Orange" style="background-color: rgb(255, 152, 0);"></a></li><li><a class="color-btn selected" href="#" data-color="#ffc107" data-value="amber" title="Amber" style="background-color: rgb(255, 193, 7);"></a></li><li><a class="color-btn" href="#" data-color="#607d8b" data-value="blue-grey" title="Blue Grey" style="background-color: rgb(96, 125, 139);"></a></li><li><a class="color-btn" href="#" data-color="#4a7885" data-value="mda" title="MDA" style="background-color: rgb(74, 120, 133);"></a></li></ul></div>

                <div class="stat-icon">
                  <i class="mdi mdi-account-multiple-plus"></i>
                </div>

                <div class="stat-details">
                  <span class="count">852</span>
                  <span class="stat-title">New clients</span>
                </div>

                <div class="stat-footer">
                  <span class="stat-graph-clients" style="display: none;">
                    <span class="bar">6,4,7,9,5,4,8,5,7,9,6,4,3,6,5,8,7,9,4,5,8</span>
                  </span><svg class="peity" height="18" width="92"><rect fill="#fff" x="0.43809523809523815" y="6" width="3.5047619047619043" height="12"></rect><rect fill="#ccc" x="4.819047619047619" y="10" width="3.504761904761904" height="8"></rect><rect fill="#fff" x="9.200000000000001" y="4" width="3.5047619047619047" height="14"></rect><rect fill="#ccc" x="13.58095238095238" y="0" width="3.5047619047619047" height="18"></rect><rect fill="#fff" x="17.961904761904762" y="8" width="3.5047619047619065" height="10"></rect><rect fill="#ccc" x="22.34285714285714" y="10" width="3.50476190476191" height="8"></rect><rect fill="#fff" x="26.72380952380952" y="2" width="3.50476190476191" height="16"></rect><rect fill="#ccc" x="31.1047619047619" y="8" width="3.5047619047619136" height="10"></rect><rect fill="#fff" x="35.48571428571428" y="4" width="3.5047619047619136" height="14"></rect><rect fill="#ccc" x="39.86666666666666" y="0" width="3.5047619047619136" height="18"></rect><rect fill="#fff" x="44.24761904761905" y="6" width="3.5047619047619065" height="12"></rect><rect fill="#ccc" x="48.628571428571426" y="10" width="3.5047619047619065" height="8"></rect><rect fill="#fff" x="53.00952380952381" y="12" width="3.5047619047618994" height="6"></rect><rect fill="#ccc" x="57.39047619047619" y="6" width="3.5047619047618994" height="12"></rect><rect fill="#fff" x="61.77142857142857" y="8" width="3.5047619047619065" height="10"></rect><rect fill="#ccc" x="66.15238095238095" y="2" width="3.5047619047619065" height="16"></rect><rect fill="#fff" x="70.53333333333333" y="4" width="3.5047619047619065" height="14"></rect><rect fill="#ccc" x="74.91428571428571" y="0" width="3.5047619047619065" height="18"></rect><rect fill="#fff" x="79.29523809523809" y="10" width="3.5047619047619065" height="8"></rect><rect fill="#ccc" x="83.67619047619048" y="8" width="3.5047619047618923" height="10"></rect><rect fill="#fff" x="88.05714285714286" y="2" width="3.5047619047618923" height="16"></rect></svg>
                </div>
              </div><!-- /.stat-body -->
            </div><!-- /.stat-item -->
          </div><div class="col-xs-6 col-sm-3">
            <div id="statCard2" class="card mt20" style="background-color: rgb(0, 151, 167);">
              <div class="stat-body sort-handle">
                <select id="colorselector_2" class="color-selector" style="display: none;">
                  <option value="pink" data-color="#e91e63">Pink</option>
                  <option value="lavendar" data-color="#7C4DFF">Lavendar</option>
                  <option value="purple" data-color="#9c27b0">Purple</option>
                  <option value="deep-purple" data-color="#673ab7">Deep Purple</option>
                  <option value="cyan" data-color="#00bcd4">Cyan</option>
                  <option value="blue-dark" data-color="#1266F1">Blue Dark</option>
                  <option value="indigo" data-color="#3f51b5">Indigo</option>
                  <option value="midnight" data-color="#313447">Midnight</option>
                  <option value="lime" data-color="#cddc39">Lime</option>
                  <option value="light-green" data-color="#8bc34a">Light Green</option>
                  <option value="cyan-dark" data-color="#0097a7">Cyan Dark</option>
                  <option value="teal" data-color="#009688">Teal</option>
                  <option value="orange" data-color="#ff9800">Orange</option>
                  <option value="amber" data-color="#ffc107">Amber</option>
                  <option value="blue-grey" data-color="#607d8b">Blue Grey</option>
                  <option value="mda" data-color="#4a7885">MDA</option>
                  </select><div class="dropdown dropdown-colorselector"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorselector" style="background-color: rgb(0, 151, 167);"></span></a><ul class="dropdown-menu top-left"><li><a class="color-btn" href="#" data-color="#e91e63" data-value="pink" title="Pink" style="background-color: rgb(233, 30, 99);"></a></li><li><a class="color-btn" href="#" data-color="#7C4DFF" data-value="lavendar" title="Lavendar" style="background-color: rgb(124, 77, 255);"></a></li><li><a class="color-btn" href="#" data-color="#9c27b0" data-value="purple" title="Purple" style="background-color: rgb(156, 39, 176);"></a></li><li><a class="color-btn" href="#" data-color="#673ab7" data-value="deep-purple" title="Deep Purple" style="background-color: rgb(103, 58, 183);"></a></li><li><a class="color-btn" href="#" data-color="#00bcd4" data-value="cyan" title="Cyan" style="background-color: rgb(0, 188, 212);"></a></li><li><a class="color-btn" href="#" data-color="#1266F1" data-value="blue-dark" title="Blue Dark" style="background-color: rgb(18, 102, 241);"></a></li><li><a class="color-btn" href="#" data-color="#3f51b5" data-value="indigo" title="Indigo" style="background-color: rgb(63, 81, 181);"></a></li><li><a class="color-btn" href="#" data-color="#313447" data-value="midnight" title="Midnight" style="background-color: rgb(49, 52, 71);"></a></li><li><a class="color-btn" href="#" data-color="#cddc39" data-value="lime" title="Lime" style="background-color: rgb(205, 220, 57);"></a></li><li><a class="color-btn" href="#" data-color="#8bc34a" data-value="light-green" title="Light Green" style="background-color: rgb(139, 195, 74);"></a></li><li><a class="color-btn selected" href="#" data-color="#0097a7" data-value="cyan-dark" title="Cyan Dark" style="background-color: rgb(0, 151, 167);"></a></li><li><a class="color-btn" href="#" data-color="#009688" data-value="teal" title="Teal" style="background-color: rgb(0, 150, 136);"></a></li><li><a class="color-btn" href="#" data-color="#ff9800" data-value="orange" title="Orange" style="background-color: rgb(255, 152, 0);"></a></li><li><a class="color-btn" href="#" data-color="#ffc107" data-value="amber" title="Amber" style="background-color: rgb(255, 193, 7);"></a></li><li><a class="color-btn" href="#" data-color="#607d8b" data-value="blue-grey" title="Blue Grey" style="background-color: rgb(96, 125, 139);"></a></li><li><a class="color-btn" href="#" data-color="#4a7885" data-value="mda" title="MDA" style="background-color: rgb(74, 120, 133);"></a></li></ul></div>

                <div class="stat-icon">
                  <i class="mdi mdi-cart"></i>
                </div>

                <div class="stat-details">
                  <span class="count">852</span>
                  <span class="stat-title">Sales</span>
                </div>

                <div class="stat-footer">
                  <span class="stat-graph-orders" style="display: none;">
                    <span class="bar">4,3,6,5,8,7,9,4,5,8,6,4,7,9,5,4,8,5,7,9,6</span>
                  </span><svg class="peity" height="18" width="92"><rect fill="#fff" x="0.43809523809523815" y="10" width="3.5047619047619043" height="8"></rect><rect fill="#ccc" x="4.819047619047619" y="12" width="3.504761904761904" height="6"></rect><rect fill="#fff" x="9.200000000000001" y="6" width="3.5047619047619047" height="12"></rect><rect fill="#ccc" x="13.58095238095238" y="8" width="3.5047619047619047" height="10"></rect><rect fill="#fff" x="17.961904761904762" y="2" width="3.5047619047619065" height="16"></rect><rect fill="#ccc" x="22.34285714285714" y="4" width="3.50476190476191" height="14"></rect><rect fill="#fff" x="26.72380952380952" y="0" width="3.50476190476191" height="18"></rect><rect fill="#ccc" x="31.1047619047619" y="10" width="3.5047619047619136" height="8"></rect><rect fill="#fff" x="35.48571428571428" y="8" width="3.5047619047619136" height="10"></rect><rect fill="#ccc" x="39.86666666666666" y="2" width="3.5047619047619136" height="16"></rect><rect fill="#fff" x="44.24761904761905" y="6" width="3.5047619047619065" height="12"></rect><rect fill="#ccc" x="48.628571428571426" y="10" width="3.5047619047619065" height="8"></rect><rect fill="#fff" x="53.00952380952381" y="4" width="3.5047619047618994" height="14"></rect><rect fill="#ccc" x="57.39047619047619" y="0" width="3.5047619047618994" height="18"></rect><rect fill="#fff" x="61.77142857142857" y="8" width="3.5047619047619065" height="10"></rect><rect fill="#ccc" x="66.15238095238095" y="10" width="3.5047619047619065" height="8"></rect><rect fill="#fff" x="70.53333333333333" y="2" width="3.5047619047619065" height="16"></rect><rect fill="#ccc" x="74.91428571428571" y="8" width="3.5047619047619065" height="10"></rect><rect fill="#fff" x="79.29523809523809" y="4" width="3.5047619047619065" height="14"></rect><rect fill="#ccc" x="83.67619047619048" y="0" width="3.5047619047618923" height="18"></rect><rect fill="#fff" x="88.05714285714286" y="6" width="3.5047619047618923" height="12"></rect></svg>
                </div>
              </div><!-- /.stat-body -->        
            </div><!-- /.stat-item -->
          </div><div class="col-xs-6 col-sm-3">
            <div id="statCard4" class="card mt20" style="background-color: rgb(18, 102, 241);">
              <div class="stat-body sort-handle">
                <select id="colorselector_4" class="color-selector" style="display: none;">
                  <option value="pink" data-color="#e91e63">Pink</option>
                  <option value="lavendar" data-color="#7C4DFF">Lavendar</option>
                  <option value="purple" data-color="#9c27b0">Purple</option>
                  <option value="deep-purple" data-color="#673ab7">Deep Purple</option>
                  <option value="cyan" data-color="#00bcd4">Cyan</option>
                  <option value="blue-dark" data-color="#1266F1">Blue Dark</option>
                  <option value="indigo" data-color="#3f51b5">Indigo</option>
                  <option value="midnight" data-color="#313447">Midnight</option>
                  <option value="lime" data-color="#cddc39">Lime</option>
                  <option value="light-green" data-color="#8bc34a">Light Green</option>
                  <option value="cyan-dark" data-color="#0097a7">Cyan Dark</option>
                  <option value="teal" data-color="#009688">Teal</option>
                  <option value="orange" data-color="#ff9800">Orange</option>
                  <option value="amber" data-color="#ffc107">Amber</option>
                  <option value="blue-grey" data-color="#607d8b">Blue Grey</option>
                  <option value="mda" data-color="#4a7885">MDA</option>
                  </select><div class="dropdown dropdown-colorselector"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorselector" style="background-color: rgb(96, 125, 139);"></span></a><ul class="dropdown-menu top-left"><li><a class="color-btn" href="#" data-color="#e91e63" data-value="pink" title="Pink" style="background-color: rgb(233, 30, 99);"></a></li><li><a class="color-btn" href="#" data-color="#7C4DFF" data-value="lavendar" title="Lavendar" style="background-color: rgb(124, 77, 255);"></a></li><li><a class="color-btn" href="#" data-color="#9c27b0" data-value="purple" title="Purple" style="background-color: rgb(156, 39, 176);"></a></li><li><a class="color-btn" href="#" data-color="#673ab7" data-value="deep-purple" title="Deep Purple" style="background-color: rgb(103, 58, 183);"></a></li><li><a class="color-btn" href="#" data-color="#00bcd4" data-value="cyan" title="Cyan" style="background-color: rgb(0, 188, 212);"></a></li><li><a class="color-btn" href="#" data-color="#1266F1" data-value="blue-dark" title="Blue Dark" style="background-color: rgb(18, 102, 241);"></a></li><li><a class="color-btn" href="#" data-color="#3f51b5" data-value="indigo" title="Indigo" style="background-color: rgb(63, 81, 181);"></a></li><li><a class="color-btn" href="#" data-color="#313447" data-value="midnight" title="Midnight" style="background-color: rgb(49, 52, 71);"></a></li><li><a class="color-btn" href="#" data-color="#cddc39" data-value="lime" title="Lime" style="background-color: rgb(205, 220, 57);"></a></li><li><a class="color-btn" href="#" data-color="#8bc34a" data-value="light-green" title="Light Green" style="background-color: rgb(139, 195, 74);"></a></li><li><a class="color-btn" href="#" data-color="#0097a7" data-value="cyan-dark" title="Cyan Dark" style="background-color: rgb(0, 151, 167);"></a></li><li><a class="color-btn" href="#" data-color="#009688" data-value="teal" title="Teal" style="background-color: rgb(0, 150, 136);"></a></li><li><a class="color-btn" href="#" data-color="#ff9800" data-value="orange" title="Orange" style="background-color: rgb(255, 152, 0);"></a></li><li><a class="color-btn" href="#" data-color="#ffc107" data-value="amber" title="Amber" style="background-color: rgb(255, 193, 7);"></a></li><li><a class="color-btn selected" href="#" data-color="#607d8b" data-value="blue-grey" title="Blue Grey" style="background-color: rgb(96, 125, 139);"></a></li><li><a class="color-btn" href="#" data-color="#4a7885" data-value="mda" title="MDA" style="background-color: rgb(74, 120, 133);"></a></li></ul></div>

                <div class="stat-icon">
                  <i class="mdi mdi-coin"></i>
                </div>

                <div class="stat-details">
                  <span class="count money">852</span>
                  <span class="stat-title">Revenue</span>
                </div>
                <div class="stat-footer">
                  <span class="stat-graph-4" style="display: none;">
                    <span class="bar">6,5,8,9,5,4,8,5,7,7,9,4,5,8,6,4,7,4,3,9,6</span>
                  </span><svg class="peity" height="18" width="92"><rect fill="#fff" x="0.43809523809523815" y="6" width="3.5047619047619043" height="12"></rect><rect fill="#ccc" x="4.819047619047619" y="8" width="3.504761904761904" height="10"></rect><rect fill="#fff" x="9.200000000000001" y="2" width="3.5047619047619047" height="16"></rect><rect fill="#ccc" x="13.58095238095238" y="0" width="3.5047619047619047" height="18"></rect><rect fill="#fff" x="17.961904761904762" y="8" width="3.5047619047619065" height="10"></rect><rect fill="#ccc" x="22.34285714285714" y="10" width="3.50476190476191" height="8"></rect><rect fill="#fff" x="26.72380952380952" y="2" width="3.50476190476191" height="16"></rect><rect fill="#ccc" x="31.1047619047619" y="8" width="3.5047619047619136" height="10"></rect><rect fill="#fff" x="35.48571428571428" y="4" width="3.5047619047619136" height="14"></rect><rect fill="#ccc" x="39.86666666666666" y="4" width="3.5047619047619136" height="14"></rect><rect fill="#fff" x="44.24761904761905" y="0" width="3.5047619047619065" height="18"></rect><rect fill="#ccc" x="48.628571428571426" y="10" width="3.5047619047619065" height="8"></rect><rect fill="#fff" x="53.00952380952381" y="8" width="3.5047619047618994" height="10"></rect><rect fill="#ccc" x="57.39047619047619" y="2" width="3.5047619047618994" height="16"></rect><rect fill="#fff" x="61.77142857142857" y="6" width="3.5047619047619065" height="12"></rect><rect fill="#ccc" x="66.15238095238095" y="10" width="3.5047619047619065" height="8"></rect><rect fill="#fff" x="70.53333333333333" y="4" width="3.5047619047619065" height="14"></rect><rect fill="#ccc" x="74.91428571428571" y="10" width="3.5047619047619065" height="8"></rect><rect fill="#fff" x="79.29523809523809" y="12" width="3.5047619047619065" height="6"></rect><rect fill="#ccc" x="83.67619047619048" y="0" width="3.5047619047618923" height="18"></rect><rect fill="#fff" x="88.05714285714286" y="6" width="3.5047619047618923" height="12"></rect></svg>
                </div>
              </div><!-- /.stat-body -->
            </div><!-- /.stat-item -->
          </div><div class="col-xs-6 col-sm-3">
            <div id="statCard3" class="card mt20" style="background-color: rgb(0, 150, 136);">
              <div class="stat-body sort-handle">
                <select id="colorselector_3" class="color-selector" style="display: none;">
                  <option value="pink" data-color="#e91e63">Pink</option>
                  <option value="lavendar" data-color="#7C4DFF">Lavendar</option>
                  <option value="purple" data-color="#9c27b0">Purple</option>
                  <option value="deep-purple" data-color="#673ab7">Deep Purple</option>
                  <option value="cyan" data-color="#00bcd4">Cyan</option>
                  <option value="blue-dark" data-color="#1266F1">Blue Dark</option>
                  <option value="indigo" data-color="#3f51b5">Indigo</option>
                  <option value="midnight" data-color="#313447">Midnight</option>
                  <option value="lime" data-color="#cddc39">Lime</option>
                  <option value="light-green" data-color="#8bc34a">Light Green</option>
                  <option value="cyan-dark" data-color="#0097a7">Cyan Dark</option>
                  <option value="teal" data-color="#009688">Teal</option>
                  <option value="orange" data-color="#ff9800">Orange</option>
                  <option value="amber" data-color="#ffc107">Amber</option>
                  <option value="blue-grey" data-color="#607d8b">Blue Grey</option>
                  <option value="mda" data-color="#4a7885">MDA</option>
                  </select><div class="dropdown dropdown-colorselector"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorselector" style="background-color: rgb(205, 220, 57);"></span></a><ul class="dropdown-menu top-left"><li><a class="color-btn" href="#" data-color="#e91e63" data-value="pink" title="Pink" style="background-color: rgb(233, 30, 99);"></a></li><li><a class="color-btn" href="#" data-color="#7C4DFF" data-value="lavendar" title="Lavendar" style="background-color: rgb(124, 77, 255);"></a></li><li><a class="color-btn" href="#" data-color="#9c27b0" data-value="purple" title="Purple" style="background-color: rgb(156, 39, 176);"></a></li><li><a class="color-btn" href="#" data-color="#673ab7" data-value="deep-purple" title="Deep Purple" style="background-color: rgb(103, 58, 183);"></a></li><li><a class="color-btn" href="#" data-color="#00bcd4" data-value="cyan" title="Cyan" style="background-color: rgb(0, 188, 212);"></a></li><li><a class="color-btn" href="#" data-color="#1266F1" data-value="blue-dark" title="Blue Dark" style="background-color: rgb(18, 102, 241);"></a></li><li><a class="color-btn" href="#" data-color="#3f51b5" data-value="indigo" title="Indigo" style="background-color: rgb(63, 81, 181);"></a></li><li><a class="color-btn" href="#" data-color="#313447" data-value="midnight" title="Midnight" style="background-color: rgb(49, 52, 71);"></a></li><li><a class="color-btn selected" href="#" data-color="#cddc39" data-value="lime" title="Lime" style="background-color: rgb(205, 220, 57);"></a></li><li><a class="color-btn" href="#" data-color="#8bc34a" data-value="light-green" title="Light Green" style="background-color: rgb(139, 195, 74);"></a></li><li><a class="color-btn" href="#" data-color="#0097a7" data-value="cyan-dark" title="Cyan Dark" style="background-color: rgb(0, 151, 167);"></a></li><li><a class="color-btn" href="#" data-color="#009688" data-value="teal" title="Teal" style="background-color: rgb(0, 150, 136);"></a></li><li><a class="color-btn" href="#" data-color="#ff9800" data-value="orange" title="Orange" style="background-color: rgb(255, 152, 0);"></a></li><li><a class="color-btn" href="#" data-color="#ffc107" data-value="amber" title="Amber" style="background-color: rgb(255, 193, 7);"></a></li><li><a class="color-btn" href="#" data-color="#607d8b" data-value="blue-grey" title="Blue Grey" style="background-color: rgb(96, 125, 139);"></a></li><li><a class="color-btn" href="#" data-color="#4a7885" data-value="mda" title="MDA" style="background-color: rgb(74, 120, 133);"></a></li></ul></div>

                <div class="stat-icon">
                  <i class="mdi mdi-gmail"></i>
                </div>

                <div class="stat-details">
                  <span class="count">852</span>
                  <span class="stat-title">New subscribers</span>
                </div>

                <div class="stat-footer">
                  <span class="stat-graph-subscribers" style="display: none;">
                    <span class="bar">7,9,4,5,8,6,4,7,4,3,6,5,8,9,5,4,8,5,7,9,6</span>
                  </span><svg class="peity" height="18" width="92"><rect fill="#fff" x="0.43809523809523815" y="4" width="3.5047619047619043" height="14"></rect><rect fill="#ccc" x="4.819047619047619" y="0" width="3.504761904761904" height="18"></rect><rect fill="#fff" x="9.200000000000001" y="10" width="3.5047619047619047" height="8"></rect><rect fill="#ccc" x="13.58095238095238" y="8" width="3.5047619047619047" height="10"></rect><rect fill="#fff" x="17.961904761904762" y="2" width="3.5047619047619065" height="16"></rect><rect fill="#ccc" x="22.34285714285714" y="6" width="3.50476190476191" height="12"></rect><rect fill="#fff" x="26.72380952380952" y="10" width="3.50476190476191" height="8"></rect><rect fill="#ccc" x="31.1047619047619" y="4" width="3.5047619047619136" height="14"></rect><rect fill="#fff" x="35.48571428571428" y="10" width="3.5047619047619136" height="8"></rect><rect fill="#ccc" x="39.86666666666666" y="12" width="3.5047619047619136" height="6"></rect><rect fill="#fff" x="44.24761904761905" y="6" width="3.5047619047619065" height="12"></rect><rect fill="#ccc" x="48.628571428571426" y="8" width="3.5047619047619065" height="10"></rect><rect fill="#fff" x="53.00952380952381" y="2" width="3.5047619047618994" height="16"></rect><rect fill="#ccc" x="57.39047619047619" y="0" width="3.5047619047618994" height="18"></rect><rect fill="#fff" x="61.77142857142857" y="8" width="3.5047619047619065" height="10"></rect><rect fill="#ccc" x="66.15238095238095" y="10" width="3.5047619047619065" height="8"></rect><rect fill="#fff" x="70.53333333333333" y="2" width="3.5047619047619065" height="16"></rect><rect fill="#ccc" x="74.91428571428571" y="8" width="3.5047619047619065" height="10"></rect><rect fill="#fff" x="79.29523809523809" y="4" width="3.5047619047619065" height="14"></rect><rect fill="#ccc" x="83.67619047619048" y="0" width="3.5047619047618923" height="18"></rect><rect fill="#fff" x="88.05714285714286" y="6" width="3.5047619047618923" height="12"></rect></svg>
                </div>
              </div><!-- /.stat-body -->
            </div><!-- /.stat-item -->
          </div></div><!-- /.row .stat-wrapper-->

        <small class="sub-text">Click on the color palette icon to change the card color.</small>

        
  </section>

@endsection
@section('footer')
<script>
</script>
@stop