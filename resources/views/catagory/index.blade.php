@extends('layouts.test')
@section('content')

    <h1>All Catagory</h1>


    <table class="table table-striped  table-primary">
        <colgroup>
        <col>
        <col>
        <col>
        <col style="width: 20%">
        
        </colgroup>


        <tr>
            <th>Id </th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

            @forelse ($cats as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->description}}</td>
                    <td style="text-align:center">
                        <a href="{{url("category/".$cat->id)}}"><i class="bi bi-eye-fill"></i></i></a>
                        <a href="#"><i class="bi bi-pencil-square"></i></a>
                        <a href="#"><i class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
            @empty
                
            @endforelse
       
    </table>
@endsection