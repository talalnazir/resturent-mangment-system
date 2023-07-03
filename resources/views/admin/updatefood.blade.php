
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
    <form  method="POST" action="{{url('/update',$food->id)}}" enctype= "multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="title">title</label>
    <input type="text"  class="form-control text-white" name="title" value="{{$food->title}}">
  </div>
  <div class="form-group">
    <label for="price">price</label>
    <input type="text" class="form-control text-white" name="price" value="{{$food->price}}">
  </div>
  <div class="form-group">
    <label for="img"> old image</label>
    
    <img height="100px" width="120px" src= "/image/{{$food->image}}"/>
  </div>
  <div class="form-group">
    <label for="img"> new image</label>
    <input type="file" class="form-control text-white" name="img">
  </div>
  <div class="mb-3">
  <label  class="form-label">dicription</label>
  <textarea class="form-control text-white" rows="3" name="textarea" value="{{$food->discription}}"> </textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
     
      @include('admin.adminscript')               
         
  </body>
</html>
