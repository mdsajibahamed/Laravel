@extends('layouts.test')
@section('content')

    
    <div class="d-flex justify-content-between">
        <h1>All category</h1>
        <a style="font-size:3em" href="{{url('category/create')}}"><i class="bi bi-file-plus-fill"></i></a>
        <input type="search" value="" class="btn btn-light">
    
    </div>
 


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
            <th>SubCategories</th>
            <th>Action</th>
        </tr>

            @forelse ($cats as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->description}}</td>
                    <td>
                        <ul>
                            @foreach ($cat->subcategories as $sc)
                                <li>{{$sc->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td style="text-align:center">
                        <a href="{{url("category/".$cat->id)}}"><i class="bi bi-eye-fill"></i></i></a>

                        <a href="{{route("category.edit",$cat->id)}}"><i class="bi bi-pencil-square"></i></a>

                        {{-- <a href="{{route("category.edit",$cat->id)}}"><i class="bi bi-pencil-square"></i></a> --}}


{{--                         
                     <form action="{{route("category.destroy",$cat->id)}}" method="post" class="d-inline"> 
                       @csrf
                       @method("delete")
                       <a href="#" onclick="del(even,this)"><i class="bi bi-trash3-fill"></i></a>
                    </form> --}}

                    <form action="{{route("category.destroy",$cat->id)}}" method="post" class="d-inline">
                        @csrf
                        @method("delete")
                       
                        <a href="#" onclick="del(event, this)"><i class="bi bi-trash3-fill"></i></a>
                        </form> 
                        

                         {{-- <button type="submit"><i class="bi bi-trash3-fill"></i></button> --}}
                    </td>
                </tr>
            @empty

                <h1>No Value Available</h1>
            @endforelse
       
    </table>
    {{$cats->links()}}
@endsection

@section('script')
{{-- <script>
    function del(e,t){
        e.preventDefault();
        let c= confirm("Are you sure delete");
        if(!c)return;
        t.closest('form').submit();
    }
</script> --}}

@section('script')
    <script>
        function del(e,t){
            e.preventDefault();
            let c = confirm("Are you sure you want to delete?");
            if(!c) return;            
            t.closest('form').submit();
        }
    </script>
@endsection
    
@endsection
