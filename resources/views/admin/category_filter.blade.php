<table id="exampleTable" class="paper table-block-responsive table-striped" >
    <thead>
        <tr>
            <th>Id</th>
            <th>Category name</th>
            <th>Image</th>
            <th>Parent Id</th>
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
            <td>{{$rec['c_name']}}</td>
            <td><img src="{{$rec['c_image']}}" alt="" width="40px" height="40px">
            <td>{{$rec['parent_id'] == null? '-': $rec['parent_id']}}</td>
            <td>{{$rec['created_at']}}</td>
            <td>active</td>
            <td class="text-center">
                <span class="text-primary" onclick="popUpEdit(`{{$rec['id']}}`,`{{$rec['c_name']}}`,`{{$rec['c_image']}}`,`{{$rec['parent_id']}}`)"><i class="far fa-edit"></i></span>&nbsp;
                <span class="text-danger" onclick="DeleteRecordPopUp(`{{$rec['id']}}`)"><i class="far fa-trash-alt"></i></span>&nbsp;
                <span class="text-success" onclick="popUpInfo(`{{$rec['id']}}`,`{{$rec['c_name']}}`,`{{$rec['c_image']}}`,`{{$rec['parent_id']}}`,`{{$rec['created_at']}}`)"><i class="fas fa-info-circle"></i></span>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="7" class="text-center">No Record Found.</td>
        </tr>
        @endif
    </tbody>
</table>