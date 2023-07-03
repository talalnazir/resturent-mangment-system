
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
    <form  method="POST" action="{{url('/chefsupload')}}" enctype= "multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="title">name</label>
    <input type="text"  class="form-control text-white" name="name">
  </div>
  
  <div class="form-group">
    <label for="img">image</label>
    <input type="file" class="form-control text-white" name="img">
  </div>
  <div class="mb-3">
  <label  class="form-label">experties</label>
  <textarea class="form-control text-white" rows="3" name="experties"> </textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

     
      @include('admin.adminscript')               
  
<table class="table mt-4"  >
  <thead>
    <tr>
      <th scope="col" class="text-white">id</th>
      <th scope="col" class="text-white">name</th>
      <th scope="col" class="text-white">experties</th>
      
      <th scope="col" class="text-white">image</th>
      <th scope="col" class="text-white">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($chefs as $chefs)
    <tr>
      <th scope="row" class="text-white">{{$chefs->id}}</th>
      <td class="text-white"> {{$chefs->name}}</td>
      <td class="text-white"> {{$chefs->experties}}</td>
      
      <td > <img height="200px" width="200px" src= "/image/{{$chefs->image}}"/></td>
    <td> <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white" href="{{url('/deletechef',$chefs->id)}}"> delete </a> </button> 
    <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white" href="{{url('/updatechef',$chefs->id)}}"> update </a> </button>
  </td>
      
     
    </tr>
@endforeach
  </tbody>
</table>
</div>
</div>
  </body>
</html>
