@extends('layouts.test')
@section('content')
<h1>This is a Product page</h1>
    
@endsection
@section('sidebar')
<ul>
   <li>Walton</li>
   <li>Sony</li>
   <li>Iphone</li>
   <li>Samsung</li>
   <li>R15</li>
</ul>
    
@endsection
@section('')
    <h1 class="bg-warning text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis dignissimos suscipit explicabo in ipsum id. Doloremque soluta, quisquam, culpa exercitationem maiores voluptatem placeat eum eveniet possimus quis quibusdam sed. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias odio soluta minima dolore deserunt quis voluptate, cum rerum corrupti laborum repudiandae impedit incidunt! Ad asperiores minus voluptatum quas accusamus aut!Lorem  Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem asperiores minus, illum autem vero repudiandae voluptate cum? Aliquid animi esse, neque exercitationem officiis sunt distinctio velit sequi aut ea libero!</h1>
@endsection

@section('down')
<form action="">
   <label for="name" class="form-label">Name</label>
   <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
   <label for="email" class="form-label">Email</label>
   <input type="email" class="form-control" placeholder="Enter Your Name">
   
</form>
    
@endsection