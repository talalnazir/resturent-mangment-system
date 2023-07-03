
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
    <div class="mt-2 ml-6"> 
    <form  method="POST" action="{{url('/uploadfood')}}" enctype= "multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="title">title</label>
    <input type="text"  class="form-control text-white" name="title">
  </div>
  <div class="form-group">
    <label for="price">price</label>
    <input type="text" class="form-control text-white" name="price">
  </div>
  <div class="form-group">
    <label for="img">image</label>
    <input type="file" class="form-control text-white" name="img">
  </div>
  <div class="mb-3">
  <label  class="form-label">dicription</label>
  <textarea class="form-control text-white" rows="3" name="textarea"> </textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<table class="table mt-4"  >
  <thead>
    <tr>
      <th scope="col" class="text-white">id</th>
      <th scope="col" class="text-white">title</th>
      <th scope="col" class="text-white">price</th>
      <th scope="col" class="text-white">discription</th>
      <th scope="col" class="text-white">image</th>
      <th scope="col" class="text-white">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($food as $food)
    <tr>
      <th scope="row" class="text-white">{{$food->id}}</th>
      <td class="text-white"> {{$food->title}}</td>
      <td class="text-white"> {{$food->price}}</td>
      <td class="text-white"> {{$food->discription}}</td>
      <td > <img height="200px" width="200px" src= "/image/{{$food->image}}"/></td>
    <td> <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white" href="{{url('/deletefood',$food->id)}}"> delete </a> </button> 
    <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white" href="{{url('/updatefood',$food->id)}}"> update </a> </button>
  </td>
      
     
    </tr>
@endforeach
  </tbody>
</table>
</div>
</div>
</div>
    
      <!-- partial -->
      
     
      @include('admin.adminscript')               
        
  </body>
</html>
