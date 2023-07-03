
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
<table class="table mt-4"  >
  <thead>
    <tr>
      <th scope="col" class="text-white">id</th>
      <th scope="col" class="text-white">name</th>
      <th scope="col" class="text-white">email</th>
      <th scope="col" class="text-white">phone</th>
      <th scope="col" class="text-white">guests</th>
      <th scope="col" class="text-white">time</th>
      <th scope="col" class="text-white">date</th>
      <th scope="col" class="text-white">message</th>
      <th scope="col" class="text-white">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($reserve as $res)
    <tr>
      <th scope="row" class="text-white">{{$res->id}}</th>
      <td class="text-white"> {{$res->name}}</td>
      <td class="text-white"> {{$res->email}}</td>
      <td class="text-white"> {{$res->phone}}</td>
      <td class="text-white"> {{$res->guests}}</td>
      <td class="text-white"> {{$res->time}}</td>
      <td class="text-white"> {{$res->date}}</td>
      <td class="text-white"> {{$res->messege}}</td>
    <td> <button type="submit" class="btn btn-primary"> <a class="text-decoration-none text-white" href="{{url('/deleteres',$res->id)}}"> delete </a> </button>   
  </td>    
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
