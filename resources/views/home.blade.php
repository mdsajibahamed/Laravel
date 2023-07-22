{{-- <h1>Bangladesh is a most important country in the world . The my reson is the most important source in the my countainer in the world so we careful country in the reseon . I am a student ISDB-BISEW islamic development babk</h1> --}}
<div class="container">
    <div class="row">

        @extends('layouts.test')

        @section('content')

        <h1>User list</h1>
        @foreach ($users as $user)
        <li>{{$user->name}} - {{$user->email}} - {{$user->role=="2"?"Admin":"User"}} </li>
            
        @endforeach


        <h1>  All  Category
        </h1>
  
  
        <table class="table table-striped table-primary">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
          </tr>
       
        <ul class="list-inline">
          @foreach ($cats as $cat)
          <tr >
            <td><li class="list-inline-item">{{$cat->id}} </li></td>
            <td>  <li class="list-inline-item">{{$cat->name}} </li></td>
            <td>  <li class="list-inline-item">{{$cat->description}} </li>
  
          </tr>
          {{-- {{$cats->links()}} --}}
          @endforeach
  
        </table>
        {{$cats->links()}}



      </ul>

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        @endsection
        @section('sidebar')
        <ul>
            <li>Bnagladesh</li>
            <li>Pakistan</li>
            <li>Afganistan</li>
            <li>Uzbekistan</li>
            <li>Turkmenistan</li>
            <li>Kyrgistan</li>
            <li>Kazakhastan</li>
        </ul>
        <div class="cl1">Bangladesh us embassy/div>
            
        @endsection

        @section('script')
        <script>
            $(document).ready(function(){
                $(".cl1").click(function(){
                    alert("You touch Me ");
                });
            })
        </script>
            
        @endsection
          
       

    </div>
</div>
