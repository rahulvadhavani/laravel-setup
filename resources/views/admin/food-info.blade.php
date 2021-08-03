@extends('layouts.admin')
@section('header')

@stop
@section('content')

<section class="content-wrapper" style="height:88vh">   
    
    <div class="page-header">
        <h1>Search Results</h1>
        <ul class="breadcrumbs">
            <li>Pages</li>
            <li>Search results</li>
        </ul>
    </div>
    <div class="page-content">        
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{$body['food']['main_image']}}" alt="">
                        <div class="card-title">{{$body['food']['food_name']}}</div>
                    </div>
                </div><br>
                <div class="card p20">
                    <div class="form-group">
                        <label class="sr-only">Status</label>                          
                        <select name="asCategories" class="selectpicker" data-width="100%"title="Status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>                                       
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>field</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Food Type : </td>
                                <td>{{$body['food']['type']==1?'Vej':'Non-Vej'}}</td>
                            </tr>
                            <tr>
                                <td>category : </td>
                                <td>{{$body['food']['c_name']}}</td>
                            </tr>
                            <tr>
                                <td>Price : </td>
                                <td>{{$body['food']['price']}}</td>
                            </tr>
                            <tr>
                                <td>Selling Price : </td>
                                <td>{{$body['food']['selling_price']}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                      
            </div>
            <div class="col-sm-8">
                <div class="list-group p20">
                    <h1>Description</h1><br>
                    {!!$body['food']['description']!!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
@stop