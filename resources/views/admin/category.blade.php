@extends('layouts.admin')
@section('content')
<?php

?>
<section class="content-wrapper" style="height:88vh">   
    <div class="container-fluid">
        <div class="p40">
            <div class="row mb10">
            <div class="col-md-3 pull-right">
                <select class="selectpicker show-tick" onchange="recordsPerPage(this.value)">
                    <option selected value="">Records</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>                                   
            </div>
            <div class="col-md-8 btn-group dropdown pagination" style="margin: 0;"> 
                <a class="btn btn-default" href="#">First</a>
                <a class="btn btn-default " href="#" ng-if="directionLinks">Previous</a>
                <a href="#" class="btn btn-default">1</a>
                <a href="#" class="btn btn-default">Next</a>
                <a href="#" class="btn btn-default">Last</a>
            </div>
            </div>
            <div class="paper" id="table-data">
            </div>
        </div>
    </div>     
</section>
<button class="btn-circle btn-lg teal waves-effect waves-theme" data-toggle="modal" data-target="#AddCategoryModal" style="position: fixed; bottom:10px; right:30px">
            <i class="mdi mdi-plus"></i></button>
<div id="AddCategoryModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-circle modal-close" style="position: absolute; right:20px"  data-dismiss="modal" aria-label="Close">×</button>
                    <h1 class="modal-title">Add Category</h1>
                </div><!-- /.modal-header -->
                <div class="modal-body">
                    <form id="add_category_form" class="paper p30" action="{{url('admin/add-category')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="block">Parent Category:</label>                           
                                <select class="selectpicker show-tick" name="parent_category">
                                    <option selected value="">Select</option>
                                    @if(isset($body['category']) && !empty($body['category']))
                                    @foreach($body['category'] as $c)
                                    <option value="{{$c['id']}}">{{$c['c_name']}}</option>
                                    @endforeach
                                    @endif
                                </select>                                   
                            </div>
                            <div class="col-sm-12 mb30">
                                <div class="input-field label-float">
                                    <input id="category_name" type="text" class="clearable" name="category_name">
                                    <label for="category_name" class="">Category Name</label>
                                    <div class="input-highlight"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="file-field input-field">
                                    <div class="btn theme">
                                        <span>Image</span>
                                        <input type="file" name="category_image">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="" class="file-path validate" type="text" placeholder="Upload one or more files">
                                        <div class="input-highlight"></div>
                                    </div>
                                </div>
                            </div>  
                        </div>    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn theme-inverse waves-effect waves-theme"  data-dismiss="modal">Close</button>
                    <button class="btn theme btn-animate left" id="addCategory">
                        <i class="slideIn-icon mdi mdi-arrow-right"></i>
                        <span class="animate-text">Add Category</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="editCategoryModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-circle modal-close" style="position: absolute; right:20px"  data-dismiss="modal" aria-label="Close">×</button>
                    <h1 class="modal-title">Update Category</h1>
                </div>
                <div class="modal-body">
                    <form id="edit_category_form" class="paper p30" action="{{url('admin/update-category')}}" method="POST">
                        @csrf
                        <input type="hidden" id="category_id" name="category_id">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="block">Parent Category:</label>                           
                                <select id="edit_parent_category" class="selectpicker show-tick" name="parent_category">
                                    <option selected value="">Select</option>
                                    @if(isset($body['category']) && !empty($body['category']))
                                    @foreach($body['category'] as $c)
                                    <option value="{{$c['id']}}">{{$c['c_name']}}</option>
                                    @endforeach
                                    @endif
                                </select>                                   
                            </div><!-- /.col- -->
                            <div class="col-sm-12 mb30">
                                <div class="input-field label-float">
                                    <input id="edit_category_name" type="text" class="clearable" name="category_name">
                                    <label for="edit_category_name" class="fixed-label  active">Category Name</label>
                                    <div class="input-highlight"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="file-field input-field">
                                    <div class="btn theme">
                                        <span>Image</span>
                                        <input type="file" name="category_image">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="" class="file-path validate" type="text" placeholder="Upload one or more files">
                                        <div class="input-highlight"></div>
                                    </div>
                                </div>
                            </div>  
                        </div>    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn theme-inverse waves-effect waves-theme"  data-dismiss="modal">Close</button>
                    <button class="btn theme btn-animate left" id="UpdateCategory" onclick="UpdateCategory()">Update Category</button>
                </div>
            </div>
        </div>
    </div>
    <div id="infoCategoryModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-circle modal-close" style="position: absolute; right:20px; top:10px"  data-dismiss="modal" aria-label="Close">×</button>
                </div>
                <div class="modal-body">
                   <div class="row">
                       <div class="col-md-4">
                           <img src="" alt="" height ='150px' width = '150px' id="infoCatImg"> 
                       </div>
                       <div class="col-md-8">
                           <table class="table">
                               <tr>
                                   <td>Category Id</td>
                                   <td id="info_cat_id"></td>
                               </tr>
                               <tr>
                                   <td>Category Name</td>
                                   <td id="info_cat_name"></td>
                               </tr>
                               <tr>
                                   <td>Parent Category Id</td>
                                   <td id="info_cat_parent"></td>
                               </tr>
                               <tr>
                                   <td>Created Date</td>
                                   <td id="info_cat_date"></td>
                               </tr>
                           </table>
                       </div>
                   </div>
                </div>
                 <div class="modal-footer">
                    <button type="button" class="btn theme-inverse waves-effect waves-theme"  data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="deleteRecortModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-circle modal-close" style="position: absolute; right:20px"  data-dismiss="modal" aria-label="Close">×</button>
                </div>
                    <form id="delete_form" class=""  action="{{url('admin/delete-category')}}" method="POST">
                        @csrf
                        <input type="hidden" id="delete_record_id" name="record_id">    
                    </form>
                    <p class="p30 h4">Are You Sure You Want Delete This Record ? </p>
               
                <div class="modal-footer">
                    <button type="button" class="btn theme-inverse waves-effect waves-theme"  data-dismiss="modal">Cancle</button>
                    <button class="btn btn-danger  waves-effect waves-theme" onclick="deleteRecord()">Delete</button>
                </div>
            </div>
        </div> 
    </div>

@endsection

@section('footer')
<script>
    url = `{{url('admin/category-filter')}}`;
    filterData(url,'table-data');

    $('#addCategory').click(function(e){
        e.preventDefault(); 
        $('#add_category_form').ajaxForm(function(res){
            
            if(res.flag == 1){
                notify(res.flag,res.msg);
                $("#AddCategoryModal").modal('hide');
                $('#add_category_form').trigger('reset');
                filterData(url,'table-data');
            }else{
                notify(res.flag,res.msg);
            }
        }).submit();
    });

    function popUpEdit(id,name,img,parent){
        $('#category_id').val(id);
        $('#edit_parent_category').val(parent);
        // $("select#edit_parent_category option").filter(":selected").val(parent);
        $('#edit_parent_category').filter(":selected").text();
        $('#edit_parent_category').filter(":selected").val();

        // alert(conceptName);
        $('#edit_category_name').val(name);
        $('#editCategoryModal').modal('show');
    }

    function DeleteRecordPopUp(id){
        $('#delete_record_id').val(id);
        $('#deleteRecortModal').modal('show');
    }
    function deleteRecord(){
        $('#delete_form').ajaxForm(function(res){
            if(res.flag == 1){
                notify(res.flag,res.msg);
                $('#delete_form').trigger('reset');
                $('#deleteRecortModal').modal('hide');
                filterData(url,'table-data');
            }else{
                notify(res.flag,res.msg);
            }
        }).submit();
    }
    function UpdateCategory(){
        $('#edit_category_form').ajaxForm(function(res){
            if(res.flag == 1){
                notify(res.flag,res.msg);
                $('#edit_category_form').trigger('reset');
                $('#editCategoryModal').modal('hide');
                filterData(url,'table-data');
            }else{
                notify(res.flag,res.msg);
            }
        }).submit();

    }
    function popUpInfo(id,name,img,parent,date){
       
      $("#info_cat_id").text(id);
      $("#info_cat_name").text(name);
      $("#info_cat_parent").text(parent==''?'-':parent);
      $("#info_cat_date").text(date);
      $("#infoCatImg").attr('src', img);
      $("#infoCategoryModal").modal('show');
    }

    function recordsPerPage(val){
        filters.itemPerPage = val;
        filters.currentPage = 1;
        filterData(url,'table-data');
    }
      
</script>

@stop