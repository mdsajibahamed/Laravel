@extends('layouts.test')

@section('content')
<h1> Create category</h1>

    <form action="{{route('category.update',$cat->id)}}" method="POST">
      
    @csrf
    @method("put")
    <div class="form-group">
        <label for="" class="form-label">Name</label>
        <input type="text" value="{{$cat->name}}" class="form-control" placeholder=" cat name" name="name" required>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Description</label>
        <textarea name="description"  class=" form-control" id="" cols="30" rows="10">{{$cat->description}}</textarea>
    </div>
    <input type="submit" value="Update" class="btn btn-outline-warning my-3 ">
    <input type="search" value="search" class="btn btn-outline-success my-3">
</form>
    
@endsection 


{{-- @extends('layouts.test')

@section('content')

<h1>Edit Category</h1>

<form action="{{route('category.update',$cat->id)}}" method="post">
    @csrf
    @method("put")
    <div class="form-group">
        <label class="form-label">Name</label>
        <input type="text" value="{{$cat->name}}" class="form-control" name="name" placeholder="Cat name" required>
    </div>
    <div class="form-group">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{$cat->description}}</textarea>        
    </div>
    <input type="submit" value="Update" class="btn btn-outline-warning  my-3">
</form>
<h1>Hi am a sajib </h1>
    
@endsection --}}