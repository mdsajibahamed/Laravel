@extends('layouts.test')
@section('content')

<label for="">ID</label>
<h1>{{($cat->id)}} </h1><br>
<label for="">Name</label>
<h1>{{($cat->name)}} </h1><br>
<label for="">
Description
</label>
<h1>{{($cat->description)}} </h1>
<label for="">Create Time</label>
<strong>{{$cat->created_at}}</strong> <br>
    
@endsection