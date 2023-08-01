@extends('layouts.test')
@section('content')
<div class="mb-3 mt-3 borderd">
<form action=""
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control" placeholder="Enter your name">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" placeholder="Enter your email">
  <label for="password" class="form-label">Password</label>
  <input type="text" class="form-control" placeholder="Enter your password">
</form>
</div>
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

@section('down')
<h1>Bangladesh is a most impoatant country in the world</h1>
    
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
