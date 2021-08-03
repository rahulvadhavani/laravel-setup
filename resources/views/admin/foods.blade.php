@extends('layouts.admin')
@section('content')
<?php

?>
<section class="content-wrapper" style="height:88vh">   
    <div class="container-fluid">
        <div class="p30">
            <div class="row mb10">
            <div class="col-md-3 pull-right" style="width: 20px;">
                <select  class="selectpicker show-tick pull-right text-white" onchange="recordsPerPage(this.value)">
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
            <br>
            <a href="{{url('admin/add-food')}}" class="btn-circle btn-lg teal waves-effect waves-theme" style="position: absolute; bottom:10px; right:30px" >
            <i class="mdi mdi-plus"></i></a>

        </div>
    </div>     
</section>


<div id="deleteRecortModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-circle modal-close" style="position: absolute; right:20px"  data-dismiss="modal" aria-label="Close">×</button>
            </div>
                <form id="delete_form" class=""  action="{{url('admin/delete-food')}}" method="POST">
                    @csrf
                    <input type="hidden" id="delete_record_id" name="record_id">    
                </form>
                <div class="p30">
                <p class=" h4">Are You Sure You Want Delete This Record ? </p><br>
                <p>This record will not longer avialible.</p>
                </div>
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
    url = `{{url('admin/foods-filter')}}`;
    filterData(url,'table-data');

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
    function recordsPerPage(val){
        filters.itemPerPage = val;
        filters.currentPage = 1;
        filterData(url,'table-data');
    }
    
  
      
</script>

@stop