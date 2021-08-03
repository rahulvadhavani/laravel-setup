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

    <div class="container-fluid demo-page">     

      <div class="page-header">
        <h1>Form Elements</h1>
        <ul class="breadcrumbs">
          <li>Forms</li>
          <li>Form Elements</li>
        </ul>
      </div>      

      <div class="page-content">
        <div class="row"> 
          <div class="scrollspy-section col-sm-10">

        <!-- INPUTS -->
            <div id="inputs" class="section">
                  <div class="toolbar theme dropshadow mb20">
                    <div class="title medium">Inputs</div>
                  </div>
                  
                  <div class="row mt40">
                    <div class="col-sm-4">
                      <span class="text-title">Input types</span>
                      <p class="sub-text mt10">Material design inputs will have the <b>theme color</b> as a border on focus. Change theme color in settings to see the effect.</p>
                    </div><!-- /.col-sm-4 -->

                    <div class="col-sm-8">

                      <div class="paper p40 pt20">

            <!-- Floating label -->
                    <div class="input-field label-float">
                      <input id="last_name" type="text" class="clearable">
                      <label for="last_name">Floating label</label>
                      <div class="input-highlight"></div>
                    </div>
          
                    <p class="p20"></p>
            <!-- Fixed label -->        
                    <div class="input-field label-float">
                      <input placeholder="Placeholder" class="clearable" id="first_name" type="text">
                      <label for="first_name" class="fixed-label active">Fixed label</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->

            <!-- Placeholder -->      
                    <div class="input-field mt40">
                      <input type="text" placeholder="Placeholder">
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->

            <!-- Disabled input -->       
                    <div class="input-field mt40">
                      <input disabled="" value="Disabled" id="disabled" type="text" class="disabled">
                    </div>

                  </div><!-- /.paper -->
                </div><!-- /.col- -->
              </div><!-- /.row -->            

              <div class="row">     
                <div class="col-sm-4">
                  <span class="text-title">Input sizes</span>
                  <p class="sub-text">Add class <code>input-sm</code> or <code>input-lg</code> to the input element</p>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-8">
                  
                  <div class="paper p40 pt20">
            <!-- Input sizes -->      
                    <div class="input-field label-float">
                      <input id="small" type="text" class="input-sm">
                      <label for="small">Input-sm</label>
                      <div class="input-highlight"></div>
                    </div>

                    <div class="input-field label-float">
                      <input id="default" type="text">
                      <label for="default">Default size</label>
                      <div class="input-highlight"></div>
                    </div>

                    <div class="input-field label-float">
                      <input id="large" type="text" class="input-lg">
                      <label for="large">Input-lg</label>
                      <div class="input-highlight"></div>
                    </div>
                  </div><!-- /.paper -->

                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">     
                <div class="col-sm-4">
                  <span class="text-title">Icon Prefixes</span>
                  <p class="sub-text">The icon will get the theme color on input focus. Once a field is filled in the icon will keep the theme color.</p>
                </div><!-- /.col- -->

                <div class="col-sm-8">
                  
                  <div class="paper p40 pt20">
            <!-- Icon Prefixes -->      
                    <div class="input-field label-float">
                      <i class="mdi mdi-account prefix"></i>
                      <input id="name" type="text" class="">
                      <label for="name">Name:</label>
                      <div class="input-highlight"></div>
                    </div>

                    <div class="input-field label-float">
                      <i class="mdi mdi-phone prefix"></i>
                      <input id="telephone" type="text">
                      <label for="telephone">Phone:</label>
                      <div class="input-highlight"></div>
                    </div>
                  </div><!-- /.paper -->

                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">     
                <div class="col-sm-4">
                  <span class="text-title">Icon Prefix sizes</span>
                  <p class="sub-text">Add class <code>small</code> or <code>large</code> to the <strong>icon</strong> element.</p>
                </div><!-- /.col- -->

                <div class="col-sm-8">
                  <div class="paper p40 pt20">
            <!-- Icon Prefixes sizes -->
                    <div class="input-field label-float">
                      <i class="mdi mdi-account prefix small"></i>
                      <input id="usernameSmall" type="text" class="input-sm">
                      <label for="usernameSmall">Small input</label>
                      <div class="input-highlight"></div>
                    </div>

                    <div class="input-field label-float">
                      <i class="mdi mdi-account prefix"></i>
                      <input id="username" type="text" class="">
                      <label for="username">Default input</label>
                      <div class="input-highlight"></div>
                    </div>          

                    <div class="input-field label-float">
                      <i class="mdi mdi-account prefix large"></i>
                      <input id="usernameLarge" type="text" class="input-lg">
                      <label for="usernameLarge">Large input</label>
                      <div class="input-highlight"></div>
                    </div>

                  </div>  
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">     
                <div class="col-sm-12">
                  <h2 class="text-headline">Addons</h2>
                  <p class="sub-text">Extend inputs by adding <strong>text</strong> or <strong>controls</strong> before, after, or on both sides of any text-based <strong>input</strong>. Use class <code>input-group</code> with an <code>input-group-addon</code> to prepend or append elements to a single <strong>input</strong>.</p>
                </div><!-- /.col- -->
              </div><!-- ./row -->

              <div class="row">     
                <div class="col-sm-4">
                  <span class="text-title">Inline text</span>
                  <p class="sub-text">Place text within an <code>input-group-addon</code>.</p>
                </div><!-- /.col- -->

                <div class="col-sm-8">

                  <div class="paper p40 pt20">

                    <!-- Inline text -->
                    <div class="input-field label-float input-group">
                      <input id="createEmail" type="text">
                      <label for="createEmail">Create email:</label>
                      <div class="input-highlight"></div>
                      <span class="input-group-addon" id="basic-addon2">@example.com</span>             
                      </div><!-- /input-group -->

                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">     
                <div class="col-sm-4">
                  <span class="text-title">Checkboxes and radio addons</span>
                  <p class="sub-text">Place any checkbox or radio option within an <code>input-group-addon</code>.</p>
                  <p class="sub-text">Use class <code>no-border</code> on the addon if you dont want a border underneath the addon.</p>
                </div><!-- /.col- -->

                <div class="col-sm-8">

                  <div class="paper p40 pt20">
                    <!-- Checkboxes and radio addons -->
                    <div class="input-field input-group form-group">
                      <span class="input-group-btn">
                        <input id="exampleCkb" type="checkbox">
                        <label for="exampleCkb"></label>
                      </span>
                      <input type="text">
                      <div class="input-highlight"></div>
                      </div><!-- /input-group -->

                      <div class="input-field input-group form-group">
                      <span class="input-group-btn no-border">
                        <input id="exampleRdOne" class="with-gap" name="group[1]" type="radio">
                        <label for="exampleRdOne"></label>
                      </span>
                      <input type="text">
                      <div class="input-highlight"></div>
                      </div><!-- /input-group -->

                      <div class="input-field input-group form-group">
                      <span class="input-group-btn no-border">
                        <input id="exampleRdTwo" class="with-gap" name="group[1]" type="radio">
                        <label for="exampleRdTwo"></label>
                      </span>
                      <input type="text">
                      <div class="input-highlight"></div>
                      </div><!-- /input-group -->
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">     
                <div class="col-sm-4">
                  <span class="text-title">Button addon</span>
                  <p class="sub-text">For buttons use class <code>input-group-btn</code> to wrap the buttons.</p>
                </div><!-- /.col- -->

                <div class="col-sm-8">

                  <div class="paper p40 pt20">
                    <!-- Button addon -->
                    <div class="input-field input-group">
                      <input type="text" class="" placeholder="Search for...">
                      <div class="input-highlight"></div>
                      <span class="input-group-btn">
                        <button class="btn-flat waves-effect waves-theme"><i class="mdi mdi-magnify"></i></button>
                      </span>           
                      </div><!-- /input-group -->
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">     
                <div class="col-sm-4">
                  <span class="text-title">Button dropdown addon</span>
                </div><!-- /.col- -->

                <div class="col-sm-8">

                  <div class="paper p40">
                    <!-- Button dropdown addon -->
                      <div class="input-field input-group form-group">
                        <input type="text" class="" placeholder="Search for...">
                        <div class="input-highlight"></div>
                        <div class="input-group-btn">
                          <button class="btn-flat btn-sm waves-effect waves-theme dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown" aria-expanded="true">
                            <span>Search in</span>
                            <i class="mdi mdi-menu-down right"></i>
                          </button>
                          <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdown1">
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#:;">All</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#:;">Friends</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#:;">Clients</a></li>
                          </ul>
                        </div>            
                        </div><!-- /input-group -->
                  </div><!-- /.paper -->
                </div><!-- /.col- -->
              </div><!-- /.row -->      

              <div class="row">
                    <div class="col-sm-4">
                      <span class="text-title">Validation state</span>
                      <p class="sub-text">To see a working example of validation inputs <strong><a target="_blank" href="form-validation.html">click here</a></strong></p>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">

                    <div class="paper p40 pt20">

                      <!-- Validation state -->       
                    <div class="input-field label-float has-success">
                      <input id="success" type="text">
                      <label for="success">Succes</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->
                  
                    <div class="input-field label-float has-warning">
                      <input id="warning" type="text">
                      <label for="warning">Warning</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->
                  
                    <div class="input-field label-float has-error">
                      <input id="error" type="text">
                      <label for="error">Error</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->
                    </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                    <div class="col-sm-4">
                      <span class="text-title">Validation state with icon</span>
                      <p class="sub-text">When using a validate icon, add class <code>has-feedback</code> to the input <strong>wrapper</strong> for proper padding.</p>
                    </div><!-- /.col- -->
          
                    <div class="col-sm-8">

                  <div class="paper p40 pt20">
                    <!-- Validation state with icon --> 
                    <div class="input-field label-float has-feedback has-success">
                      <input id="success_icon" type="text">
                      <i class="mdi mdi-check form-control-feedback"></i>
                      <label for="success_icon">Succes</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->
                  
                    <div class="input-field label-float has-feedback has-warning">
                      <input id="warning_icon" type="text">
                      <i class="mdi mdi-alert form-control-feedback"></i>
                      <label for="warning_icon">Warning</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->
                  
                    <div class="input-field label-float has-feedback has-error">
                      <input id="error_icon" type="text">
                      <i class="mdi mdi-alert-circle form-control-feedback"></i>
                      <label for="error_icon">Error</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->
                  </div><!-- /.paper -->          
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                <div class="col-sm-4">
                  <span class="text-title">Input with help text</span>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">

                    <div class="paper p40 pt20 clearfix">

                      <!-- Help block text -->        
                    <div class="input-field label-float">
                      <input id="default_text" type="text">
                      <i class="mdi mdi-check form-control-feedback"></i>
                      <label for="default_text">Default with help text</label>
                      <div class="input-highlight"></div>
                      <span class="help-block">A block of help text.</span>
                    </div>

                    <div class="input-field label-float has-success">
                      <input id="success_text" type="text">
                      <i class="mdi mdi-check form-control-feedback"></i>
                      <label for="success_text">Succes with help text</label>
                      <div class="input-highlight"></div>
                      <span class="help-block">A block of help text on success.</span>
                    </div>
                  
                    <div class="input-field label-float has-warning">
                      <input id="warning_text" type="text">
                      <i class="mdi mdi-alert form-control-feedback"></i>
                      <label for="warning_text">Warning with help text</label>
                      <div class="input-highlight"></div>
                      <span class="help-block">A block of help text on warning.</span>
                    </div><!-- /.input-field -->
                  
                    <div class="input-field label-float has-error">
                      <input id="error_text" type="text">
                      <i class="mdi mdi-alert-circle form-control-feedback"></i>
                      <label for="error_text">Error with help text</label>
                      <div class="input-highlight"></div>
                      <span class="help-block">A block of help text on error.</span>
                    </div><!-- /.input-field -->
                    </div><!-- /.paper -->        
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                    <div class="col-sm-4">
                      <div class="text-title">Input mask</div>
                      <p class="sub-text">A jQuery Plugin to make masks on form fields and html elements.<br><br>To use <strong>Mask</strong>, you will have to manually link to the mask.js file.<br><br>For all the options see the <a target="_blank" href="http://igorescobar.github.io/jQuery-Mask-Plugin/">documentation</a></p>
                    </div><!-- /.col- -->
                
                <div class="col-sm-8">

                      <div class="paper p40 ">
                        <div class="input-field label-float mb40">
                      <i class="mdi mdi-calendar prefix"></i>
                      <input id="date" type="text" placeholder="mm / dd / yyyy">
                      <label for="date" class="fixed-label active">Date of Birth</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->

                    <div class="input-field label-float mb40">
                      <i class="mdi mdi-phone prefix"></i>
                      <input id="phone" type="text" placeholder="(123) 123 - 1234">
                      <label for="phone" class="fixed-label active">Phone</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->

                    <div class="input-field label-float mb40">
                      <i class="mdi mdi-key prefix"></i>
                      <input id="ipAddress" type="text" placeholder="099.099.099.099">
                      <label for="ipAddress" class="fixed-label active">IP Address</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->

                    <div class="input-field label-float mb40">
                      <i class="mdi mdi-credit-card prefix"></i>
                      <input id="ccard" type="text" placeholder="1234 - 1234 - 1234 - 1234">
                      <label for="ccard" class="fixed-label active">Card number</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->

                    <div class="input-field label-float">
                      <i class="mdi mdi-currency-usd prefix"></i>
                      <input placeholder="1.000,00" id="money" type="text">
                      <label for="money" class="fixed-label active">Amount</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->
                      </div><!-- /.paper -->
                </div><!-- /.col- -->
              </div><!-- /.row -->

            </div><!-- /.section Input -->

        <!-- TEXTAREA -->

            <div id="textarea" class="section">
                  <div class="toolbar theme dropshadow mb40">
                    <div class="title medium">Textarea</div>
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                      <span class="text-title">Auto Resize Textarea</span>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">

                  <div class="paper p40">
                    <div class="input-field">
                      <textarea id="textarea1" class="textarea-auto-resize"></textarea>
                            <label for="textarea1">Textarea</label>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                    <div class="col-sm-4">
                      <span class="text-title">With icon prefix</span>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">

                  <div class="paper p40">           
                    <div class="input-field">
                      <i class="mdi mdi-pencil prefix"></i>
                      <textarea id="icon_prefix2" class="textarea-auto-resize" placeholder="Share your thoughts..."></textarea>
                      <div class="input-highlight"></div>
                    </div><!-- /.input-field -->
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->
                    
            </div><!-- /.section Textarea --> 

        <!-- CHARACTER COUNTER -->

            <div id="characterCounter" class="section">
                  <div class="toolbar theme dropshadow mb40">
                    <div class="title medium">Character Counter</div>
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                      <span class="text-title">Counter with input</span>
                      <p class="sub-text">Add the <i class="text-indigo">data-length=" "</i> attribute to the input with the number of characters that are aloud to type by the user.<br>In this example data-length is set to 12.</p>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40">

          <!-- Character counter input -->
                    <div class="input-field label-float">
                      <input id="inputCounter" type="text" data-length="12" placeholder="Start typing to see the count">
                      <label for="inputCounter" class="fixed-label active">Input with counter</label>
                      <div class="input-highlight"></div>
                    <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span></div>
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

                  <div class="row">
                    <div class="col-sm-4">
                      <span class="text-title">Counter with textarea</span>
                      <p class="sub-text">Add the <i class="text-indigo">data-length=" "</i> attribute to the textarea element.<br>In this example data-length is set to 40.</p>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40">

          <!-- Character counter textarea -->
                    <div class="input-field">
                      <textarea id="textarea3" class="textarea-auto-resize" data-length="40"></textarea>
                            <label for="textarea3">Textarea with counter</label>
                      <div class="input-highlight"></div>
                    <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span></div><!-- /.input-field -->
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->
                    
            </div><!-- /.section character counter --> 

        <!-- TAGS INPUT -->

            <div id="tagsInput" class="section">
                  <div class="toolbar theme dropshadow mb40">
                <div class="title medium">Tags input</div>
              </div>
                <div class="row">
                  <div class="col-sm-4">
                    <p class="sub-text">To use <strong>tagsinput</strong>, you will have to manually link the tagsinput.css and tagsinput.js files.</p>
                      <p class="sub-text">Use attribute <i class="text-indigo">data-role <span class="text-teal">="tagsinput"</span></i> on the input element.<br>Tags will have the theme color.<br><br>Works with typeahead.js. For all options see the <a target="_blank" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/">documentation</a>.</p>
                      
                    </div><!-- /.col-sm-4 -->

                    <div class="col-sm-8">

                  <div class="paper p40">

            <!-- Tag input -->      
                    <div class="input-field">
                      <div class="bootstrap-tagsinput"><span class="tag label label-info">Amsterdam<span data-role="remove"></span></span> <span class="tag label label-info">Miami<span data-role="remove"></span></span> <input type="text" placeholder=""></div><input value="Amsterdam,Miami" data-role="tagsinput" type="text" style="display: none;">
                    </div><!-- /.input-field -->
                  </div>
                </div><!-- /.col-sm-8 -->
              </div><!-- /.row -->
            </div><!-- /.section tagsinput -->

        <!-- COLOR PICKER -->   

            <div id="colorPicker" class="section">
                  <div class="toolbar theme dropshadow mb40">
                    <div class="title medium">Color Picker</div>
                  </div>

                <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Basic</span>
                      <p class="sub-text"></p><p class="sub-text">To use <strong>Spectrum</strong>, you will have to manually link the spectrum.css and spectrum.js files.<br><br>For all options see the <a target="_blank" href="http://bgrins.github.io/spectrum/">documentation</a></p> 
                    </div><!-- /.col- -->

                    <div class="col-sm-8">

                  <div class="paper p40">

            <!-- Basic color picker -->
                    <input class="colorpicker" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(255, 193, 7);"></div></div><div class="sp-dd">▼</div></div>

                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Selection palette</span>
                      <p class="sub-text">keep track of what has been selected by the user with the <i class="text-indigo">showSelectionPalette</i> option.<br>If the <i class="text-indigo">localStorageKey</i> option is defined, the selection will be saved in the browser's localStorage object</p>
                    </div><!-- /.col- -->
          
                    <div class="col-sm-8">
                  
                  <div class="paper p40">
          <!-- Selection palette -->
                    <input id="cp-selection-palette" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(255, 0, 0);"></div></div><div class="sp-dd">▼</div></div>

                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Palette only</span>
                      <p class="sub-text">Show a specified palette only.</p>
                    </div><!-- /.col- -->
          
                    <div class="col-sm-8">  
                  <div class="paper p40">           
          <!-- Palette only -->
                    <input id="cp-palette-only" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(75, 0, 130);"></div></div><div class="sp-dd">▼</div></div>

                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Palette toggle</span>
                      <p class="sub-text">The user can choose from a limited number of colors in the palette, but still be able to pick a color that's not in the palette.</p>
                    </div><!-- /.col- -->
          
                    <div class="col-sm-8">  
                  <div class="paper p40">

          <!-- Palette toggle -->
                    <input id="cp-palette-toggle" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(255, 235, 205);"></div></div><div class="sp-dd">▼</div></div>

                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Full example</span>
                    </div><!-- /.col- -->
          
                    <div class="col-sm-8">
          
                  <div class="paper p40">           
          <!-- Full color picker -->
                    <input id="colorPickerfull" style="display: none;"><div class="sp-replacer sp-light full-spectrum"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(255, 193, 7);"></div></div><div class="sp-dd">▼</div></div>
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->   

            </div><!-- /.section color picker -->

        <!-- DATE PICKER -->    

            <div id="datePicker" class="section">
                  <div class="toolbar theme dropshadow mb40">
                    <div class="title medium">Date / time Picker</div>
                  </div>

                <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Date Picker</span>
                      <p class="sub-text">To use the <b>Date-picker</b>, you will have to manually link the date-picker.css, picker.js and picker.date.js files.<br>For all options see the <a target="_blank" href="http://amsul.ca/pickadate.js/date/">documentation</a></p>  
                    </div><!-- /.col- -->

                    <div class="col-sm-8">

                      <div class="paper p40">
            <!-- Date picker -->          
                        <input type="text" class="datepicker picker__input" placeholder="Pick a date" readonly="" id="P814091916" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P814091916_root"><div class="picker" id="P814091916_root" tabindex="0" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__date-display"><div class="picker__weekday-display">Sunday</div><div class="picker__month-display"><div>Feb</div></div><div class="picker__day-display"><div>14</div></div><div class="picker__year-display"><div>2021</div></div></div><div class="picker__calendar-container"><div class="picker__header"><select class="picker__select--month browser-default" disabled="" aria-controls="P814091916_table" title="Select a month"><option value="0">January</option><option value="1" selected="">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><select class="picker__select--year browser-default" disabled="" aria-controls="P814091916_table" title="Select a year"><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021" selected="">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P814091916_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="P814091916_table" title="Next month"> </div></div><table class="picker__table" id="P814091916_table" role="grid" aria-controls="P814091916" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">S</th><th class="picker__weekday" scope="col" title="Monday">M</th><th class="picker__weekday" scope="col" title="Tuesday">T</th><th class="picker__weekday" scope="col" title="Wednesday">W</th><th class="picker__weekday" scope="col" title="Thursday">T</th><th class="picker__weekday" scope="col" title="Friday">F</th><th class="picker__weekday" scope="col" title="Saturday">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1612031400000" role="gridcell" aria-label="31 January, 2021">31</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612117800000" role="gridcell" aria-label="1 February, 2021">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612204200000" role="gridcell" aria-label="2 February, 2021">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612290600000" role="gridcell" aria-label="3 February, 2021">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612377000000" role="gridcell" aria-label="4 February, 2021">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612463400000" role="gridcell" aria-label="5 February, 2021">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612549800000" role="gridcell" aria-label="6 February, 2021">6</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612636200000" role="gridcell" aria-label="7 February, 2021">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612722600000" role="gridcell" aria-label="8 February, 2021">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612809000000" role="gridcell" aria-label="9 February, 2021">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612895400000" role="gridcell" aria-label="10 February, 2021">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1612981800000" role="gridcell" aria-label="11 February, 2021">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613068200000" role="gridcell" aria-label="12 February, 2021">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613154600000" role="gridcell" aria-label="13 February, 2021">13</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1613241000000" role="gridcell" aria-label="14 February, 2021" aria-activedescendant="true">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613327400000" role="gridcell" aria-label="15 February, 2021">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613413800000" role="gridcell" aria-label="16 February, 2021">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613500200000" role="gridcell" aria-label="17 February, 2021">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613586600000" role="gridcell" aria-label="18 February, 2021">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613673000000" role="gridcell" aria-label="19 February, 2021">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613759400000" role="gridcell" aria-label="20 February, 2021">20</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613845800000" role="gridcell" aria-label="21 February, 2021">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1613932200000" role="gridcell" aria-label="22 February, 2021">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1614018600000" role="gridcell" aria-label="23 February, 2021">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1614105000000" role="gridcell" aria-label="24 February, 2021">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1614191400000" role="gridcell" aria-label="25 February, 2021">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1614277800000" role="gridcell" aria-label="26 February, 2021">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1614364200000" role="gridcell" aria-label="27 February, 2021">27</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1614450600000" role="gridcell" aria-label="28 February, 2021">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1614537000000" role="gridcell" aria-label="1 March, 2021">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1614623400000" role="gridcell" aria-label="2 March, 2021">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1614709800000" role="gridcell" aria-label="3 March, 2021">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1614796200000" role="gridcell" aria-label="4 March, 2021">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1614882600000" role="gridcell" aria-label="5 March, 2021">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1614969000000" role="gridcell" aria-label="6 March, 2021">6</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1615055400000" role="gridcell" aria-label="7 March, 2021">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1615141800000" role="gridcell" aria-label="8 March, 2021">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1615228200000" role="gridcell" aria-label="9 March, 2021">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1615314600000" role="gridcell" aria-label="10 March, 2021">10</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1615401000000" role="gridcell" aria-label="11 March, 2021">11</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1615487400000" role="gridcell" aria-label="12 March, 2021">12</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1615573800000" role="gridcell" aria-label="13 March, 2021">13</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1613241000000" disabled="" aria-controls="P814091916">Today</button><button class="btn-flat picker__clear" type="button" data-clear="1" disabled="" aria-controls="P814091916">Clear</button><button class="btn-flat picker__close" type="button" data-close="true" disabled="" aria-controls="P814091916">Close</button></div></div></div></div></div></div>

                      </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Clock Picker</span>
                      <p class="sub-text">To use <strong>clockPicker</strong>, you will have to manually link the clockpicker.css and clockpicker.js files.<br><br>For all options see the <a target="_blank" href="http://weareoutman.github.io/clockpicker/">documentation</a></p>
                    </div><!-- /.col- -->

                    <div class="col-sm-8 pt30">
                  <div class="paper p40">
                    
          <!-- Time picker -->
                    <div class="clockpicker input-field">
                        <input type="text" value="" placeholder="Pick a time">
                        <div class="input-highlight"></div>
                    </div>
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->   

            </div><!-- /.section date / clock picker -->

        <!-- SELECT -->

            <div id="select" class="section">
                  <div class="toolbar theme dropshadow mb20">
                    <div class="title medium">Select</div>
                  </div>

                  <p class="sub-text mb20">Bootstrap-select is the templates default selectpicker. No need to add css or js files, Just add class <code>selectpicker</code> to the select.<br>For all options see the <a target="_blank" href="https://silviomoreto.github.io/bootstrap-select/options/">documentation</a>.</p>

              <div class="row">
                <div class="col-sm-4">
                      <span class="text-title">Basic single select</span>
                      <p class="sub-text">Add the class <code>selectpicker</code> to the select to initialize.</p>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p20 pt40 pb40">

          <!-- Basic select -->         
                    <div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Option 1"><span class="filter-option pull-left">Option 1</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Option 1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Option 2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Option 3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker show-tick" tabindex="-98">
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                      </select></div>
                  </div>          
                    </div><!-- /.col- -->
                </div><!-- /.row -->

                <div class="row">
                <div class="col-sm-4">
                      <span class="text-title">Theme Color</span>
                      <p class="sub-text">Give the dropdown menu the <b>theme color</b> by adding the class <code>select-theme</code>.</p>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p20 pt40 pb40">

          <!-- Theme dropdown -->         
                    <div class="btn-group bootstrap-select show-tick select-theme"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Option 1"><span class="filter-option pull-left">Option 1</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Option 1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Option 2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Option 3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker show-tick select-theme" tabindex="-98">
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                      </select></div>
                  </div>          
                    </div><!-- /.col- -->
                </div><!-- /.row -->

              <div class="row">
                <div class="col-sm-4">
                      <span class="text-title">Search input</span>
                      <p class="sub-text">To add a search input to the select dropdown use the attribute <i class="text-indigo">data-live-search=<span class="text-teal">"true"data-live-search</span></i></p>    
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p20 pt40 pb40">

          <!-- Select with search -->         
                    <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Mustard"><span class="filter-option pull-left">Mustard</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"></div><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" data-live-search="true" tabindex="-98">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select></div>

                  </div>
                    </div><!-- /.col- -->
              </div><!-- /.row -->
              

              <div class="row">
                <div class="col-sm-4">
                      <span class="text-title">Multiple select</span>
                      <p class="sub-text">Add <i class="text-indigo">multiple</i> To allow multiple selections.</p> 
                    </div><!-- /.col- -->

                    <div class="col-sm-8">              
                  <div class="paper p20 pt40 pb40">
                    
          <!-- Multiple select -->
                    <div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" multiple="" tabindex="-98">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select></div>

                  </div>
                    </div><!-- /.col-sm-8 -->
              </div><!-- /.row -->

              <div class="row">
                <div class="col-sm-4">
                      <span class="text-title">Option groups</span>           
                    </div><!-- /.col- -->

                    <div class="col-sm-8">          
                    <div class="paper p20 pt40 pb40">
                      
          <!-- Option groups -->
                      <div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Mustard"><span class="filter-option pull-left">Mustard</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li class="dropdown-header " data-optgroup="1"><span class="text">Picnic</span></li><li data-original-index="0" data-optgroup="1" class="selected"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1" data-optgroup="1"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2" data-optgroup="1"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-optgroup="2div"></li><li class="dropdown-header " data-optgroup="2"><span class="text">Camping</span></li><li data-original-index="3" data-optgroup="2"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Tent</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4" data-optgroup="2"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Flashlight</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5" data-optgroup="2"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Toilet Paper</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker show-tick" tabindex="-98">
                        <optgroup label="Picnic">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                        </optgroup>
                        <optgroup label="Camping">
                        <option>Tent</option>
                        <option>Flashlight</option>
                        <option>Toilet Paper</option>
                        </optgroup>
                    </select></div>
                    </div>          
                    </div><!-- /.col- -->
                </div><!-- /.row -->

                <div class="row">
                <div class="col-sm-4">
                      <div class="text-title">Action box</div>
                      <p class="sub-text">Use <i class="text-indigo"> data-actions-box=<span class="text-teal">"true"</span></i> To add the options to select or deslect all options.</p> 
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p20 pt40 pb40">           
          <!-- Select action box -->
                    <div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><div class="bs-actionsbox"><div class="btn-group btn-group-sm btn-block"><button type="button" class="actions-btn bs-select-all btn btn-default">Select All</button><button type="button" class="actions-btn bs-deselect-all btn btn-default">Deselect All</button></div></div><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Blue</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Green</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Orange</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Red</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Yellow</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" multiple="" data-selected-text-format="count" data-actions-box="true" tabindex="-98">
                        <option value="blue">Blue</option>
                              <option value="green">Green</option>
                              <option value="orange">Orange</option>
                              <option value="red">Red</option>
                              <option value="yellow">Yellow</option>
                    </select></div>
                  </div>      
                    </div><!-- /.col- -->
                </div><!-- /.row -->      

              <div class="row">
                <div class="col-sm-4">
                      <div class="text-title">Max options</div>
                      <p class="sub-text">You can limit the number of options the user is allowed to select by setting the <i class="text-indigo">data-max-options=" "</i> attribute.<br>e.g. <i class="text-indigo">data-max-options=<span class="text-teal">"2"</span></i></p>              
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p20 pt40 pb40">
                    
          <!-- Max option on select -->
                    <div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" multiple="" data-max-options="2" tabindex="-98">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select></div>

                  </div>          
                    </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                <div class="col-sm-4">
                      <span class="text-title">Selection count</span>
                      <p class="sub-text"> If one item is selected, then the value is shown. If multiple are selected then the number of selected items is displayed by using: <br> <i class="text-indigo">data-selected-text-format=<span class="text-teal">"count"</span></i>.</p>    
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p20 pt40 pb40">
                    
          <!-- Count selected options -->
                    <div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" multiple="" data-selected-text-format="count" tabindex="-98">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select></div>

                  </div>        
                    </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                <form id="validateSelect" novalidate="novalidate">
                  <div class="col-sm-4">
                        <span class="text-title">Validate</span>
                        <p class="sub-text">To validate the select add class <code>select-validate</code>.<br>jQuery-validate is used to validate form fields.<br><br>
                        <button class="btn btn-sm theme waves-effect waves-light"><i class="mdi mdi-send right"></i>Validate</button>
                        </p>    
                      </div><!-- /.col- -->

                      <div class="col-sm-8">
                    <div class="paper p20 pt40 pb40">
                      
              <!-- Validation -->                   
                      <div class="form-group">
                          <label for="langauges" class="block">Langauges:</label> 

                          <!-- To validate the select add class "select-validate" -->     
                              <div class="btn-group bootstrap-select show-tick select-validate"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="langauges" title="Select your langauges"><span class="filter-option pull-left">Select your langauges</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Arabic</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Chinese</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">English</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">French</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">German</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Portuguese</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Russian</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Spanish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="langauges" name="langauges" class="selectpicker select-validate" multiple="" title="Select your langauges" data-selected-text-format="count > 3" tabindex="-98">
                                  <option value="arabic">Arabic</option>
                                  <option value="chinese">Chinese</option>
                                  <option value="english">English</option>
                                  <option value="french">French</option>
                                  <option value="german">German</option>
                                  <option value="portuguese">Portuguese</option>
                                  <option value="russian">Russian</option>
                                  <option value="spanish">Spanish</option>
                              </select></div>                     
                        </div><!-- /.form-group -->

                    </div>        
                      </div><!-- /.col- -->
                </form>
              </div><!-- /.row -->

              <div class="row">
                <div class="col-sm-4">
                      <div class="text-title">Width</div>
                      <p class="sub-text">By default the select has a width of 220px.<br>
                      You can set the width by using the <i class="text-indigo">data-width=" "</i> attribute. Options are <span class="text-teal">auto</span>, <span class="text-teal">px</span> or <span class="text-teal">%</span>.</p>             
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p20 pt40 pb40">           
          <!-- Selection width -->
                    <div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" multiple="" tabindex="-98">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select></div>
                  </div>          
                    </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row mt20">
                <div class="col-sm-4">
                  <h5><i class="text-indigo">data-width=</i><span class="text-teal">"auto"</span></h5>
                      <p class="sub-text">Width of the select adjusts to its widest option.</p>             
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p20 pt40 pb40">

                      <div class="btn-group bootstrap-select mb10" style="width: 85px;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" style="min-width: 0px;"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Read</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Unread</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Starred</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker mb10" data-width="auto" tabindex="-98">
                        <option>All</option>
                        <option>Read</option>
                        <option>Unread</option>
                        <option>Starred</option>
                     </select></div>
                  </div>
                    </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row mt20">
                <div class="col-sm-4">
                  <h5><i class="text-indigo">data-width=</i><span class="text-teal">"150px"</span></h5>
                  <p class="sub-text">Give it a fixed with by using px.</p>             
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p20 pt40 pb40">           
                    <div class="btn-group bootstrap-select mb10" style="width: 150px;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Read</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Unread</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Starred</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker mb10" data-width="150px" tabindex="-98">
                        <option>All</option>
                        <option>Read</option>
                        <option>Unread</option>
                        <option>Starred</option>
                    </select></div>
                  </div>        
                    </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row mt20">
                <div class="col-sm-4">
                  <h5><i class="text-indigo">data-width=</i><span class="text-teal">"100%"</span></h5>
                      <p class="sub-text">Full width to its parent element.</p>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                      <div class="paper p20 pt40 pb40">           
                    <div class="btn-group bootstrap-select mb10" style="width: 100%;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Read</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Unread</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Starred</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker mb10" data-width="100%" tabindex="-98">
                        <option>All</option>
                        <option>Read</option>
                        <option>Unread</option>
                        <option>Starred</option>
                    </select></div>
                  </div>          
                    </div><!-- /.col- -->
              </div><!-- /.row -->
            </div><!-- /.section bootstrap-select -->

        <!-- TYPEAHEAD -->
            
            <div id="typeahead" class="section">
                  <div class="toolbar theme dropshadow mb40">
                    <div class="title medium">Typeahead</div>
                  </div>

                  <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Typeahead</span>
                      <p class="sub-text">To use <strong>Typeahead</strong>, you will have to manually link the typeahead.js file.<br><br>For all options see the <a target="_blank" href="https://twitter.github.io/typeahead.js/examples/">documentation</a></p>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                      <div class="paper p20 pt40 pb40">                 
          <!-- Typeahead -->
                        <div id="the-basics">
                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="typeahead tt-hint" type="text" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(0, 0, 0, 0);"><input class="typeahead tt-input" type="text" placeholder="Type for a state" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Roboto, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-states"></div></div></span>
                    </div>
                      </div>          
                </div><!-- /.col- -->
              </div><!-- /.row -->

              </div><!-- /.section autocomplete -->

        <!-- CHECKBOX -->

            <div id="checkbox" class="section">
                  <div class="toolbar theme dropshadow mb20">
                    <div class="title medium">Checkboxes</div>
                  </div>

                  <p class="text-body sub-text mb40">Easy to use, <strong>css only</strong> checkboxes that come in two different styles.</p>

                  <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Types &amp; States</span>            
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                      <div class="paper p40">
            <!-- Checkbox states -->
                      <div class="row mb0">
                        <div class="col-xs-6">
                          <h5 class="mb20">Checkmark Type</h5>        
                          <p>
                          <input type="checkbox" id="test2" checked="checked">
                          <label for="test2">Checked</label>
                          </p>
                          <p>
                          <input type="checkbox" id="test1">
                          <label for="test1">Unchecked</label>
                          </p>            
                          <p>
                              <input type="checkbox" id="test4" disabled="disabled">
                              <label for="test4">Disabled</label>
                          </p>
                          <p>
                          <input type="checkbox" id="test3" checked="checked" disabled="disabled">
                          <label for="test3">Disabled checked</label>
                          </p>          
                        </div>

                        <div class="col-xs-6">
                          <h5 class="mb20">Filled Type</h5>
                          <p>
                          <label for="filled-state-1" class="checkbox-filled">
                            <input type="checkbox" class="filled" id="filled-state-1" checked="checked">
                            <i class="highlight"></i>
                            Checked
                            </label>
                          </p>
                          <p>
                          <label for="filled-state-2" class="checkbox-filled">
                            <input type="checkbox" class="filled" id="filled-state-2">
                            <i class="highlight"></i>
                            Unchecked
                            </label>
                          </p>
                          <p>
                          <label for="filled-state-3" class="checkbox-filled disabled">
                            <input type="checkbox" class="filled" id="filled-state-3" disabled="disabled">
                            <i class="highlight"></i>
                            Disabled
                            </label>
                          </p>
                          <p>
                          <label for="filled-state-4" class="checkbox-filled disabled">
                            <input type="checkbox" class="filled" id="filled-state-4" checked="checked" disabled="disabled">
                            <i class="highlight"></i>
                            Disabled Checked
                            </label>
                          </p>          
                        </div>
                      </div>        
                          
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                  <div class="col-sm-4">
                      <div class="text-title">Colors</div>
                      <p class="sub-text">Add one of the following classes to the input element: <br><code>theme</code>, <code>info</code>, <code>warning</code> or <code>error</code>.</p>                   
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40 pb30">
          <!-- Checkbox colors -->
                    <input type="checkbox" id="test8" checked="checked">
                    <label for="test8" class="inline">Default</label>     
                    
                    <input type="checkbox" class="theme" id="test9" checked="checked">
                    <label for="test9" class="inline">Theme</label>       
                    
                    <input type="checkbox" class="info" id="test10" checked="checked">
                    <label for="test10" class="inline">Info</label>

                    <input type="checkbox" class="warning" id="test11" checked="checked">
                    <label for="test11" class="inline">Warning</label>      
                    
                    <input type="checkbox" class="error" id="test12" checked="checked">
                    <label for="test12" class="inline">Error</label>

                    <div class="divider mt20 mb30"></div>
        <!-- Checkbox filled -->
                    <label for="filled-1" class="checkbox-filled mr10">
                      <input type="checkbox" class="filled" id="filled-1" checked="checked">
                      <i class="highlight"></i>
                      Default
                      </label>

                      <label for="filled-2" class="checkbox-filled mr10">
                      <input type="checkbox" class="filled theme" id="filled-2">
                      <i class="highlight"></i>
                      Theme
                      </label>

                      <label for="filled-3" class="checkbox-filled mr10">
                      <input type="checkbox" class="filled info" id="filled-3">
                      <i class="highlight"></i>
                      Info
                      </label>

                      <label for="filled-4" class="checkbox-filled mr10">
                      <input type="checkbox" class="filled warning" id="filled-4">
                      <i class="highlight"></i>
                      Warning
                      </label>

                      <label for="filled-5" class="checkbox-filled">
                      <input type="checkbox" class="filled error" id="filled-5">
                      <i class="highlight"></i>
                      Error
                      </label>
                  </div><!-- /.paper -->
                </div><!-- /.col- -->
              </div><!-- /.row -->            

            </div><!-- /.section checkbox -->

        <!-- RADIO -->

            <div id="radio" class="section">
                  <div class="toolbar theme dropshadow mb40">
                    <div class="title medium">Radio</div>
                  </div>
                
                <div class="row">
                  <div class="col-sm-4">          
                      <span class="text-title">States</span>            
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40">
          <!-- Radio states -->       
                      <p>
                      <input name="group[1]" type="radio" id="radio1" checked="checked">
                      <label for="radio1">Checked</label>
                      </p>
                      <p>
                      <input name="group[1]" type="radio" id="radio2">
                      <label for="radio2">Unchecked</label>
                      </p>              
                      <p>
                          <input name="group[2]" type="radio" id="radio4" disabled="disabled">
                          <label for="radio4">Disabled</label>
                      </p>              
                    </div>          
                </div><!-- /.col- -->
              </div><!-- /.row -->              

              <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Colors</span>        
                      <p class="sub-text">Add one of the following option as a class: <br><code>theme</code>, <code>info</code>, <code>warning</code> or <code>danger</code>.</p>   
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40">
          <!-- Radio colors -->
                    <input name="group[3]" type="radio" id="radiof5">
                    <label for="radiof5" class="inline">Default</label>
                    
                    <input class="theme" name="group[3]" type="radio" id="radiof6" checked="checked">
                    <label for="radiof6" class="inline">Theme</label>

                    <input class="info" name="group[3]" type="radio" id="radiof7">
                    <label for="radiof7" class="inline">Info</label>

                    <input class="warning" name="group[3]" type="radio" id="radiof8">
                    <label for="radiof8" class="inline">Warning</label>

                    <input class="danger" name="group[3]" type="radio" id="radiof9">
                    <label for="radiof9" class="inline">Danger</label>
                  </div><!-- /.paper -->
                </div><!-- /.col- -->
              </div><!-- /.row -->        

            </div><!-- /.section radio --> 

        <!-- RANGE SLIDER -->

            <div id="rangeSlider" class="section">
              <div class="toolbar theme dropshadow mb40">
                <div class="title medium">Range slider</div>
              </div>

              <h3>noUiSlider plugin</h3>
              <p class="sub-text mb10">Lightweight JavaScript range slider with full touch support.</p>
              <p class="sub-text">noUiSlider offers several ways to handle <b>user interaction</b>. The range can be set to <b>drag</b>, and handles can move to <b>taps</b>. All these effects are optional, and can be enable by adding their keyword to the behaviour option.<br>This option accepts a <span class="text-gree">"-"</span> separated list of <span class="text-green">"drag"</span>, <span class="text-green">"tap"</span>, <span class="text-green">"fixed"</span>, <span class="text-green">"snap"</span> or <span class="text-green">"none"</span>.</p>
              <p class="sub-text mb40">To use the noUiSlider, you will have to manually link the nouislider.css and nouislider.js files.<br>For all option see the <a target="_blank" href="http://refreshless.com/nouislider/slider-options/">noUislider documentation</a></p>

              <div class="row pt20">
                  <div class="col-sm-4">
                      <span class="text-title">Types</span>
                      <p class="sub-text">For the default slider you dont have to add a class. To use the other types, add class <code>slider-scale</code>, <code>slider-shadow</code> or <code>slider-balloon</code>.</p>
                      <span class="text-title">Colors</span>
                      <p class="sub-text">Click on one of the colors and see the class you have to add. For the default color you dont have to add a class.</p>
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40">
                    <div id="typeSlider" class="mb40 demo-slider slider-theme noUi-target noUi-ltr noUi-horizontal noUi-connect"><div class="noUi-base"><div class="noUi-origin noUi-background" style="left: 20%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>

                    <div id="typeSliderScale" class="slider-scale mb40 demo-slider slider-theme noUi-target noUi-ltr noUi-horizontal noUi-connect"><div class="noUi-base"><div class="noUi-origin noUi-background" style="left: 30%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>

                    <div id="typeSliderShadow" class="slider-shadow mb40 demo-slider slider-theme noUi-target noUi-ltr noUi-horizontal noUi-connect"><div class="noUi-base"><div class="noUi-origin noUi-background" style="left: 40%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>
                    
                    <div class="divider mb40"></div>

                    <div id="typeSliderBalloon" class="slider-balloon mb40 demo-slider slider-theme noUi-target noUi-ltr noUi-horizontal noUi-connect"><div class="noUi-base"><div class="noUi-origin noUi-background" style="left: 50%;"><div class="noUi-handle noUi-handle-lower"><div class="noUi-tooltip">50</div></div></div></div></div>

                    <div class="divider mb40"></div>

                    <div class="slider-colors clearfix">
                      <ul>
                        <li class="default"></li>
                        <li class="theme"></li>
                        <li class="info"></li>
                        <li class="warning"></li>
                        <li class="danger"></li>
                      </ul>             
                    </div>
                    <p class="mt20" id="sliderColor"></p>
                    
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->
                
                <div class="row pt20">
                  <div class="col-sm-4">
                      <span class="text-title">Handles</span>
                      <p class="sub-text">The number of handles can be set using the start option. This option accepts an array of initial handle positions. Set one value for one handle, two values for two handles.<br>The 2 handles can be connected by setting the <b>connect</b> option to "true", and the <b>behaviour</b> option to <span class="text-green">"drag"</span> or <span class="text-green">"drag-fixed"</span></p>              
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40">
                    <h5>Handles connected</h5>
                    <div id="slider-twohandles" class="slider-shadow slider-theme mt20 noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect noUi-draggable" style="left: 20%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 50%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                    
                    <h5 class="mt40">Handles fixed connected</h5>
                    <div id="slider-twohandlesfixed" class="slider-shadow slider-theme mt20 noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect noUi-draggable" style="left: 30%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 60%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->              

              <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Slider values</span>
                      <p class="sub-text">Display the values of the slider.</p>             
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40">

          <!-- single handle with value -->
                    <div id="sliderRange" class="slider-shadow slider-theme noUi-target noUi-ltr noUi-horizontal noUi-connect"><div class="noUi-base"><div class="noUi-origin noUi-background" style="left: 33.3333%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>

                    <!-- Markup to display value -->
                    <div class="slider-value mb20 inline">
                        <span id="slider-range-value" class="slider-value-lower">40</span>
                    </div>

          <!-- double handle with values -->
                    <div id="slider-ranges" class="slider-shadow slider-theme noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect noUi-draggable" style="left: 20%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 60%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>

                    <!-- Markup to display value -->
                    <div class="slider-value">
                        <span id="slider-ranges-value-lower" class="slider-value-lower">20</span>
                        <span id="slider-ranges-value-upper" class="slider-value-upper pull-right">60</span>
                    </div>            
                  </div><!-- /.paper -->
                </div><!-- /.col- -->
              </div><!-- /.row -->

          <!-- Slider Stepping -->
              <div class="row pt20">
                  <div class="col-sm-4">
                      <span class="text-title">Stepping</span>
                      <p class="sub-text">The amount the slider changes on movement can be set using the <b>step</b> option. In this example the <b>behaviour</b> option is set to <span class="text-green">"snap"</span>.</p>              
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40">   
                    <div id="slider-step" class="slider-shadow slider-theme noUi-target noUi-ltr noUi-horizontal noUi-connect"><div class="noUi-base"><div class="noUi-origin noUi-background" style="left: 25%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>

                    <div class="slider-value inline">
                        <span id="slider-step-value" class="slider-value-lower">4000.00</span>
                    </div>
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->

              <div class="row">
                  <div class="col-sm-4">
                      <span class="text-title">Slider with pips</span>        
                    </div><!-- /.col- -->

                    <div class="col-sm-8">
                  <div class="paper p40">
          <!-- Slider with pips -->
                    <div id="slider-pips" class="mt20 mb40 slider-balloon slider-theme noUi-target noUi-ltr noUi-horizontal noUi-connect"><div class="noUi-base"><div class="noUi-origin noUi-background" style="left: 40%;"><div class="noUi-handle noUi-handle-lower"><div class="noUi-tooltip">40</div></div></div></div><div class="noUi-pips noUi-pips-horizontal"><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0.00000%"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 0.00000%">0</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 1.92308%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 3.84615%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 5.76923%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 7.69231%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 9.61538%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 11.53846%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 13.46154%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 15.38462%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 17.30769%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 19.23077%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 21.15385%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 23.07692%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 25.00000%"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 25.00000%">25</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 26.92308%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 28.84615%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 30.76923%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 32.69231%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 34.61538%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 36.53846%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 38.46154%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 40.38462%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 42.30769%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 44.23077%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 46.15385%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 48.07692%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 50.00000%"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 50.00000%">50</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 51.92308%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 53.84615%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 55.76923%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 57.69231%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 59.61538%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 61.53846%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 63.46154%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 65.38462%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 67.30769%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 69.23077%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 71.15385%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 73.07692%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 75.00000%"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 75.00000%">75</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 76.92308%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 78.84615%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 80.76923%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 82.69231%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 84.61538%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 86.53846%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 88.46154%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 90.38462%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 92.30769%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 94.23077%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 96.15385%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 98.07692%"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100.00000%"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 100.00000%">100</div></div></div>
                  </div>
                </div><!-- /.col- -->
              </div><!-- /.row -->      

            </div><!-- /.section slider --> 

        <!-- FILE UPLOAD -->

            <div id="fileupload" class="section">
                  <div class="toolbar theme dropshadow mb40">
                    <div class="title medium">File upload</div>
                  </div>

                    <div class="row pt30">
                  <div class="col-sm-4">
                    <span class="text-title">File input</span>
                    <p class="sub-text">You can use the <span class="text-blue-dark">multiple</span> attribute to allow multiple file uploads.</p>
                  </div>            
                      <div class="col-sm-8">
                    <div class="paper p20 pt40 pb40">
          <!-- Input File -->
                          <form action="#">
                          <div class="file-field input-field">
                          <div class="btn theme">
                            <span>File</span>
                            <input type="file" multiple="">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload one or more files">
                            <div class="input-highlight"></div>
                          </div>
                          </div><!-- /.input-field -->
                      </form>
                    </div>
                  </div><!-- /.col- -->
                </div><!-- /.row -->
                
                    <div class="row">           
                      <div class="col-sm-4">
                        <span class="text-title">Dropzone</span>
                        <p class="sub-text">Dropzone.js is a light weight JavaScript library that turns an HTML element into a dropzone. This means that a user can drag and drop a file onto it, and the file gets uploaded to the server via AJAX.</p>
                    <p class="sub-text">To use <strong>Dropzone</strong>, you will have to manually link the dropzone.css and dropzone.js files.<br><br>For all the options see the <a target="_blank" href="http://www.dropzonejs.com/">documentation</a></p>
                      </div><!-- /.col- -->

                      <div class="col-sm-8 pt30"> 
          <!-- Dropzone -->
                    <form action="/file-upload" class="dropzone dz-clickable" id="my-awesome-dropzone"><div class="dz-default dz-message"><span>Drop files here to upload</span></div></form>
                  </div><!-- /.col- -->
                </div><!-- /.row -->

            </div><!-- /.section -->

        <!-- KNOB -->

            <div id="knob" class="section">
                  <div class="toolbar theme dropshadow mb20">
                    <div class="title medium">jQuery Knob</div>
                  </div>

                  <p class="sub-text mb40">To use <strong>jQuery Knob</strong>, you will have to manually link the jquery.knob.js file.<br>For all options see the <a target="_blank" href="http://anthonyterrien.com/knob/">documentation</a></p>   
                
                <div class="paper p40 mb40">    
                    <div class="row mt20">
                    <div class="col-sm-2">
                        <h5>Default</h5>              
                      </div><!-- /.col- -->
                    
                      <div class="col-sm-4">

                        <div style="display:inline;width:100px;height:100px;"><canvas width="125" height="125" style="width: 100px; height: 100px;"></canvas><input type="text" class="jknob" value="75" data-width="100" data-height="100" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background: none; font: bold 20px Arial; text-align: center; color: rgb(135, 206, 235); padding: 0px; appearance: none;"></div>

                  </div><!-- /.col- -->
                    <div class="col-sm-2">
                        <h5>Readonly</h5>             
                      </div><!-- /.col- -->
                    
                      <div class="col-sm-4">

                        <div style="display:inline;width:100px;height:100px;"><canvas width="125" height="125" style="width: 100px; height: 100px;"></canvas><input type="text" class="jknob" data-readonly="true" value="80" data-width="100" data-height="100" data-fgcolor="#26C266" readonly="readonly" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background: none; font: bold 20px Arial; text-align: center; color: rgb(38, 194, 102); padding: 0px; appearance: none;"></div>

                  </div><!-- /.col- -->
                </div><!-- /.row -->

                <div class="row mt20 mb0">
                    <div class="col-sm-2">
                        <h5>Half</h5>             
                      </div><!-- /.col- -->
                    
                      <div class="col-sm-4">

                        <div style="display:inline;width:100px;height:100px;"><canvas width="125" height="125" style="width: 100px; height: 100px;"></canvas><input type="text" class="jknob" value="58" data-width="100" data-height="100" data-angleoffset="-90" data-anglearc="180" data-fgcolor="#1266F1" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background: none; font: bold 20px Arial; text-align: center; color: rgb(18, 102, 241); padding: 0px; appearance: none;"></div>

                  </div><!-- /.col- -->
                    <div class="col-sm-2">
                        <h5>Thickness</h5>              
                      </div><!-- /.col- -->
                    
                      <div class="col-sm-4">

                        <div style="display:inline;width:100px;height:100px;"><canvas width="125" height="125" style="width: 100px; height: 100px;"></canvas><input type="text" class="jknob" value="28" data-width="100" data-height="100" data-thickness=".2" data-fgcolor="#313447" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background: none; font: bold 20px Arial; text-align: center; color: rgb(49, 52, 71); padding: 0px; appearance: none;"></div>

                  </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->
              </div><!-- /.paper -->
            </div><!-- /.section --> 

          </div><!-- /.scrollspy-section -->

          <div class="col-sm-2" id="myScrollspy">
                <ul class="nav nav-scrollspy list-group transparent no-border item-small affix-top" data-spy="affix" data-offset-top="20">
                    <li class="active"><a data-scroll="" href="#inputs" class="list-group-item">Inputs</a></li>
                    <li><a data-scroll="" href="#textarea" class="list-group-item">Textarea</a></li>
                    <li><a data-scroll="" href="#characterCounter" class="list-group-item">Character counter</a></li>
                    <li><a data-scroll="" href="#tagsInput" class="list-group-item">Tags input</a></li>
                    <li><a data-scroll="" href="#colorPicker" class="list-group-item">Color picker</a></li>
                    <li><a data-scroll="" href="#datePicker" class="list-group-item">Date / time picker</a></li>
                    <li><a data-scroll="" href="#select" class="list-group-item">Select</a></li>
                    <li><a data-scroll="" href="#typeahead" class="list-group-item">Typeahead</a></li>
                    <li><a data-scroll="" href="#checkbox" class="list-group-item">Checkboxes</a></li>
                    <li><a data-scroll="" href="#radio" class="list-group-item">Radio</a></li>            
                    <li><a data-scroll="" href="#rangeSlider" class="list-group-item">Range Slider</a></li>
                    <li><a data-scroll="" href="#fileupload" class="list-group-item">File upload</a></li>
                    <li><a data-scroll="" href="#knob" class="list-group-item">jQuery Knob</a></li>
                </ul>

            </div><!-- /col- -->
        </div><!-- /.row -->        
      </div><!-- /.page-content -->
      
      <a id="back-to-top" href="#" class="btn-circle theme back-to-top">
        <i class="mdi mdi-chevron-up medium"></i>
      </a>        
    </div><!-- /.container-fluid -->
  </section>

@endsection
@section('footer')
<script>
</script>
@stop