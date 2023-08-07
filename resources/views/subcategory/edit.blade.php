@extends('layouts.test')
@section('title')
    {{__('Subcategory Edit')}}
@endsection
@section('content')
   <div class="d-flex justify-content-between">

    <h1>Edit Subcategory</h1>
    <a href="javascript::history.back()"><i class="bi bi-backspace"></i></a>
    
   </div>
   {{html()->modelForm($subcategory,'post',route("subcategory.update",$subcategory->id))->open()}}
   {{-- {{ html()->modelForm($subcategory,'post', route("subcategory.update",$subcategory->id))->open() }} --}}
   @csrf
   @method("put")

   <div class="form-group">
    <label class="form-label">Category</label>
    {!! html()->select('category_id',$categories,old('category_id'))->class('form-select')->placeholder("Select...")!!}
</div>
<div class="form-group">
    <label class="form-label">Name</label>
    {!! html()->text('name',old('name'))->class('form-control')->placeholder("subcategory name")->attributes(['maxlength'=>'255']) !!}
</div>

   <input type="submit" value="Update" class="btn btn-outline-primary my-3">
   </form>
@endsection