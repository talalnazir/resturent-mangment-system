<!DOCTYPE html>
<html lang="en">

  <head>
  <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    </head>
    
    <body>
    <div id="top">
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                           
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li class="scroll-to-section"><a href="{{url('/cartpage',Auth::user()->id)}}">cart[]</a></li> 
                            <li>  @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                       <li>
                 <x-app-layout>
   
   </x-app-layout>
</li>
                    @else
                    <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                        <li>  <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> </li>
                        @endif
                    @endauth
                </div>
            @endif
</li>
                        </ul>        
                
    </header>
  
  <table class="table">
    <thead>
    <tr> 
        <th scope="col"> Food name </th>
        <th scope="col"> Food price </th>
        <th scope="col"> quantity </th>
        <th scope="col"> action </th>
       
</tr>
</thead>
<form method="POST" action="{{url('/confirmorder')}}" >
    @csrf
    <tbody>
@foreach($data as $data)

<tr>
<th scope="row">
 <input type="text" name="foodname[]" hidden value=" {{$data->title}}" />   
{{$data->title}} <th>
<td>
<input type="text" name="price[]" hidden value=" {{$data->price}}" />
    {{$data->price}} <td>
<td >
<input type="text" name="quantity[]" hidden value=" {{$data->quantity}}" /> 
{{$data->quantity}} <td>

</tr>
@endforeach
@foreach($data2 as $data2)
<tr style="position:relative;top: -60px;right: -1250px;">
<td > <a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">  delete  </a><td>
    <tr>
  
@endforeach
</tbody>
</table>

</div>
<div align="center">
    <button class="btn btn-primary" id="order" type="button"><span class="text-dark"> order now </span></button>
   

</div>
<div class="container" id="apear" style="display:none;" >
  <div class="form-group">
    <label for="exampleInputEmail1">name </label>
    <input type="text" class="form-control" name="n1" id="exampleInputEmail1"  placeholder="Enter yourtext">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">phone</label>
    <input type="text" class="form-control" name="n2" id="exampleInputEmail1"  placeholder="Enter phone">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> address</label>
    <input type="text" class="form-control" name="n3" id="exampleInputEmail1"  placeholder="Enter address">
  </div>
 
  <button   class="btn btn-primary"  type="submit"> <span class="text-dark"> ordernow  </span></button>
  <button   class="btn btn-danger" id="close"> close</button>
</div>
</form>
   <script type="text/javascript">
    $("#order").click(
function()
{
    $("#apear").show();
}
    );
    $("#close").click(
function()
{
    $("#apear").hide();
}
    );

    </script>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
   

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>