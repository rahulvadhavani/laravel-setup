@extends('layouts.admin')
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
@stop
@section('content')

<section class="content-wrapper" style="height:88vh">   
    <div class="container-fluid">
        <div class="p30">
            <form class="paper p30 mt30" onkeydown="return event.key != 'Enter';" action="{{url('admin/add-food')}}" method="post" id="add_food_form">
                @csrf
                <div class="text-display-1">{{$body['label']}}</div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class=" input-field label-float">
                            <label for="foodname">Food Name:</label>
                            <input type="text" id="foodname"  name="food_name">
                            <div class="input-highlight"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="mt40">
                        <input name="food_type" type="radio" id="radio1" class="with-gap" value="1" checked='checked'>
                        <label for="radio1" class="inline">Veg.</label>         
                        <input name="food_type" type="radio" id="radio2" class="with-gap" value="0">
                        <label for="radio2">Non Veg.</label>              
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-field label-float">
                            <label for="price">Price</label>
                            <input type="text" id="price" name="price">
                            <div class="input-highlight"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class=" input-field label-float">
                            <label for="selling_price">Selling Price</label>
                            <input type="text" id="selling_price"  name="selling_price">
                            <div class="input-highlight"></div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="block mb12">Main Category:</label>            
                            <select class="selectpicker show-tick" data-width="100%" name="category" id="food_category">
                                <option selected="" disabled="">Select</option>
                                @foreach($body['category'] as $cat)
                                <option value="{{$cat['id']}}">{{$cat['c_name']}}</option>
                                @endforeach
                            </select>                                    
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="block mb12">Related Category:</label>            
                            <select name="related_category[]" class="selectpicker" data-width="100%" multiple  title="Select Related Category" id="food_categories">
                                @foreach($body['category'] as $cat)
                                <option value="{{$cat['id']}}">{{$cat['c_name']}}</option>
                                @endforeach
                            </select>                                       
                        </div>
                    </div>
                   <div class="col-sm-6">
                        <div class="col-xs-6 mt40 pl0">
                            <div class="file-field input-field">
                                <div class="btn indigo waves-effect waves-light">
                                    <span>Main Images</span>
                                    <input type="file" name="main_image" onchange="imagePreview(this,'#img_preview')">
                                </div>
                                <div class="file-path-wrapper ml40">
                                    <input class="file-path validate" type="text" placeholder="Upload one file">
                                    <div class="input-highlight"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 m-t-20 ">
                            <div class="md-form-group float-label ">
                                <img src="" onerror="this.style.display='none'" id="img_preview" alt="Image Preview" width="70" height="70" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt40">
                        <div class="file-field input-field">
                            <div class="btn indigo waves-effect waves-light">
                                <span>Images</span>
                                <input type="file" multiple name="images[]">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                <div class="input-highlight"></div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-xs-12 mt30 p0">
                    <label>Dish Discription</label>
                    <input type="text" class="md-input p10" name="description" id="description" />
                </div>
                <div class="form-group clearfix pt40">
                    <button class="btn indigo waves-effect waves-light btn-md  pull-right" id="add_food_btn">Add Food</button>
                </div>
            </form>          
        </div>
    </div>     
</section>

@endsection

@section('footer')
<script src="{{url('assets/js/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('description', {
        removePlugins: 'save'
    });

    $("#add_food_btn").on('click', function(event) {
        event.preventDefault();
        var content = CKEDITOR.instances.description.getData();
        $('#description').val(content);
        $('#add_food_form').ajaxForm(function(res){
            
            if(res.flag == 1){
                notify(res.flag,res.msg);
                $('#add_food_form').trigger('reset');
                $('#img_preview').attr('src', '');
                $('#img_preview').hide();
                $('#food_category').val('');
                $('#food_categories').val('');
                CKEDITOR.instances.description.setData('');
                
            }else{
                notify(res.flag,res.msg);
            }
        }).submit();
     });
</script>


@stop