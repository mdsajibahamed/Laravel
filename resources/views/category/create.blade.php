@extends('layouts.test')

@section('content')
    <h1> Create category Subject </h1>
    <form action="{{route('category.store')}}" method="POST">
        
    @csrf
    <div class="form-group">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" placeholder=" cat name" name="name" required value="{{old("name")}}">
    </div>
    <div class="form-group">
        <label for="" class="form-label">Description</label>
        <textarea name="description" class=" form-control" id="" cols="30" rows="10">{{old('description')}}</textarea>
    </div>
    <input type="submit" value="insert">
    
    </form>
@endsection
