<table id="exampleTable" class="paper table-block-responsive table-striped" >
    <thead class="indigo">
        <tr>
            <th>Id</th>
            <th>Food Name</th>
            <th>Image</th>
            <th>Type</th>
            <th>Price</th>
            <th>category</th>
            <th>Created At</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody class="table-data" style="font-size:17px">
        @if(isset($data) &&  !empty($data))
        @foreach($data as $rec)
        <tr>
            <td>{{$rec['id']}}</td>
            <td>{{$rec['food_name']}}</td>
            <td><img src="{{$rec['main_image']}}" alt="" width="40px" height="40px">
            <td>{{$rec['type'] == 1?'Vej.':'Non Vej.'}}</td>
            <td>{{$rec['price']}}</td>
            <td>{{$rec['c_name']}}</td>
            <td>{{$rec['created_at']}}</td>
            <td>{{$rec['status']==1?'Active':'Inactive'}}</td>
            <td class="text-center">
                <a class="text-success" href="{{url('admin/edit-food').'/'.$rec['id']}}"><i class="fas fa-edit"></i></a>&nbsp;
                <span class="text-danger" onclick="DeleteRecordPopUp(`{{$rec['id']}}`)"><i class="far fa-trash-alt"></i></span>&nbsp;
                <a class="text-success" href="{{url('admin/food-info').'/'.$rec['id']}}"><i class="fas fa-info-circle"></i></a>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="9" class="text-center">No Record Found.</td>
        </tr>
        @endif
    </tbody>
</table>