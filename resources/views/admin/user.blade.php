
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
  <table class="table" >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      @if($data->usertype=='1')
      <td> <button type="submit" class="btn btn-primary">notalowed </button></td>
      @else
        <td> <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white"  href="{{url('/delete',$data->id)}}"> delete </a> </button></td>
      
      @endif
    </tr>
   @endforeach
  </tbody>
</table>
</div>
</div>
    
      <!-- partial -->
      
     
      @include('admin.adminscript')               
        
  </body>
</html>
