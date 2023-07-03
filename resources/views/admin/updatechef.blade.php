
<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')

  </head>
  <body>
   
  <div class="container-scroller">
    @include('admin.adminnavbar')
    <div class="mt-2 ml-6"> 
    <form  method="POST" action="{{url('/updatedc',$chef->id)}}" enctype= "multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="title">name</label>
    <input type="text"  class="form-control text-white" name="name" value="{{$chef->name}}">
  </div>
  <div class="form-group">
    <label for="price">experties</label>
    <input type="text" class="form-control text-white" name="experties" value="{{$chef->experties}}">
  </div>
  <div class="form-group">
    <label for="img"> old image</label>
    
    <img height="100px" width="120px" src= "/image/{{$chef->image}}"/>
  </div>
  <div class="form-group">
    <label for="img"> new image</label>
    <input type="file" class="form-control text-white" name="img">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
     
      @include('admin.adminscript')               
         
  </body>
</html>
