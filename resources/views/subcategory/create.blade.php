@extends('layouts.test')
@section('title')
{{__('Subcategory Create')}}
    
@endsection
@section('content')
     {{-- {{ html()->form('post', route("subcategory.store"))->open() }} --}}
    {{ html()->form('post',route("subcategory.store"))->open() }} 
    {{-- <form action="{{route('subcategory.store')}}" method="post"> --}}
    @csrf
    <div class="form-group">
        <label class="form-label">Category</label>
        {!! html()->select('category_id',$categories,old('category_id'))->class('form-select')->placeholder("Select...")!!}
    </div>
    <div class="form-group">
        <label class="form-label">Name</label>
        {!! html()->text('name',old('name'))->class('form-control')->placeholder("subcategory name")->attributes(['maxlength'=>'255']) !!}
    </div>
    <input type="submit" value="Insert" class="btn btn-outline-primary my-3">
   </form>
@endsection