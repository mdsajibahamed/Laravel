@extends('layouts.test')
@section('content')
<h1>This  is a about page</h1>
    
@endsection
@section('sidebar')
<ul>
  
  <li>India</li>
  <li>Jarman</li>
  <li>Japan</li>
  <li>America</li>
  <li>England</li>
</ul>
    
@endsection

@section('script')
<h1 class="cl2">Product is most important part in company</h1>

<script>
  $(document).ready(function(){
    $(".cl2").click(function(){
      alert("this is a product");
    });
  })
</script>
    
@endsection
