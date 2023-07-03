
<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
  <div class="container-scroller">
    @include('admin.adminnavbar')
  

    
      @include('admin.adminscript') 
   
                    
  <div class="container ">
  <form action="{{url('/search')}}" method="get" class="mt-4">
    @csrf
      <div class="input-group">
  <input type="text" name="search" class="form-control rounded ml-6" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary">search</button>
</div>
</form>
<table class="table mt-4 "  >
  <thead>
    <tr>
      <th scope="col" class="text-white">id</th>
      <th scope="col" class="text-white">food_name</th>
      <th scope="col" class="text-white">price</th>
      <th scope="col" class="text-white">quantity</th>
      <th scope="col" class="text-white">user_name</th>
      <th scope="col" class="text-white">phone</th>
      <th scope="col" class="text-white">Address</th>
      <th scope="col" class="text-white">total</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $data)
    <tr>
      <th scope="row" class="text-white">{{$data->id}}</th>
      <td class="text-white"> {{$data->food_name}}</td>
      <td class="text-white"> {{$data->price}}</td>
      <td class="text-white"> {{$data->quantity}}</td>
      <td class="text-white"> {{$data->user_name}}</td>
      <td class="text-white"> {{$data->phone}}</td>
      <td class="text-white"> {{$data->address}}</td>
      <td class="text-white"> {{$data->price * $data->quantity}}</td>   
    </tr>
@endforeach
  </tbody>
</table>
</div>
</div>
</div>
  </body>
</html>
