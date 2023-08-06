@extends('layouts.test')
@section('content')
<div class="table-responsive">


    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Cat/SubCat</th>
            <th>Name</th>
            <th>Sku</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Hot</th>
            <th>New</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @forelse ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>
                {{-- {{ $product->category->name }}/
                {{ $product->subcategory->name }} --}}
                {{$product->category->name}}/{{$product->subcategory->name}}
            </td>
            <td>{{$product->name}}</td>
            <td>{{$product->sku}}</td>
            {{-- <td>{{$product->details}}</td> --}}
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->status}}</td>
            <td>{{$product->hot}}</td>
            <td>
                @foreach ($product->images as $image)
                <img src="{{$image->name}}" alt="" width="60px" class="p-2">
                    
                @endforeach
            </td>
            <td>Edit|Delete|View</td>
        </tr>
            
        @empty
            
        @endforelse
    </table>
</div>
<hr>
{{-- {{$products->link()}} --}}
@endsection