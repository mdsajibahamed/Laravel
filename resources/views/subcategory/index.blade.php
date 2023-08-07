@extends('layouts.test')
@section('content')
<div class="d-flex justify-content-between">

    {{-- {{dd(Auth::user())}} --}}
<h1> All Subcateories</h1>
<a style="font-size: 2em" href="{{url('subcategory/create')}}"><i class="bi bi-file-plus-fill"></i></a>
</div>
    <div class="table-responsive">
        <table class="table table-striped">
           <tr>

          
            <th>ID</th>
            <th>Category name</th>
            <th>Subcategoy name</th>
            <th>Action</th>
        </tr>
        @forelse ($subcategories as $sc)
            <tr>
                {{-- <td>{{$loop->index}}</td> --}}
                {{-- <td>{{$loop->first}}</td> --}}
                <td>{{$loop->iteration}}</td>
                <td>{{$sc->category->name}}</td>
                <td>{{$sc->name}}</td>
                <td><a href="{{route('subcategory.edit',$sc->id)}}">Edit</a></td>
            </tr>
        @empty
            
        @endforelse
        </table>
        {{$subcategories->links()}}
    </div>
 
@endsection

    