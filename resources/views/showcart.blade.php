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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>The Red Chamber</title>
<!--
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/restaurent.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
        input[type=text], select {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid rgb(0, 0, 0);
            border-radius: 4px;
            box-sizing: border-box;
    }
    input[type=number], select {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid rgb(0, 0, 0);
            border-radius: 4px;
            box-sizing: border-box;
    }
    
     input[type=submit] {
      width: 15%;
      background-color: #0c5226a6;
      color: white;
      padding: 6px 8px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    } 
    
    input[type=submit]:hover {
      background-color: #39a027;
    } 
    
    .eachlabel {
      border-radius: 5px;
      background-color: #000000;
      padding: 20px;
    }
    
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 80%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers td{
        padding: 50px 0;
    }
   
    #customers tr:nth-child(odd){background-color: #d66363;}
    #customers tr:nth-child(even){background-color: #f57373;}
    
    #customers tr:hover {background-color: rgb(255, 69, 69);}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #f06c5b;
      color: white;
    }
    
    table{
        margin-top: 30px;
        background-color: black;
    }
    
    .space{
        margin-bottom: 3%;
    }
    #top{
        width: 80%
    }

    
    .btn:link, .btn:visited {
      background-color: white;
      color: black;
      border: 2px solid #f06c5b;;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
    }
    
    .btn:hover, .btn:active {
      background-color: #f06c5b;;
      color: white;
    }

    .change{
      position: relative; 
      top: -200px;
      height: 50px;
      right:-1510px;
    }
       </style>
 

    </head>
    
    <body>

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


                        <a href="/" class="logo">
                            <img src="assets/images/chamber-logo.jfif" align="klassy cafe html template" height="80px" width="170px">


                            <a class="menu-trigger">
                                
                                <span>Menu</span>

                            </a>

                        </a>



                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
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
                            {{-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> --}}
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                    <li class="scroll-to-section"  style="background-color: red; color: white; ">
                    @auth
                        <a href="{{url('/showcart',Auth::user()->id)}}">Cart{{ $count }}</a>
                    @endauth
                    @guest
                    Cart[0]
                    @endguest

                </a></li> 
            <li>
                                
                                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                      <li>
                          
                        <x-app-layout>
                            
                        </x-app-layout>

                      </li>
                    @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif</li>

                        </ul>        


                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="top">
        <table id="customers" align="center">
            <tr style="text-align: center">
                <th style="padding: 50px; text-align: center">Food Name</th>
                <th style="padding: 30px; text-align: center">Price</th>
                <th style="padding: 30px; text-align: center">Quantity</th>
                
                
            </tr>

        <form action="{{ url('orderconfirm') }}" method="POST">
            @csrf
            @foreach($data as $data)
            <tr align="center">
                <td><input type="text" name="foodname[]" value="{{ $data->title }}" hidden> {{ $data->title }}</td>
                <td><input type="text" name="price[]" value="{{ $data->price }}" hidden>{{ $data->price }}</td>
                <td><input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden>{{ $data->quantity }}</td>
            </tr>
            @endforeach
            </table>
            @foreach($data2 as $data2)
            <tr>
             <td style="position: fixed">
                 <a class="btn btn-warning change" href="{{url('/remove',$data2->id)}}" >Remove</a>
                <br>
                <br><br>
             </td>
            </tr>
            @endforeach
        </table>
        
        
        <div align="center" style="padding: 10px;">
    
            <button style="background-color: blue" class="btn btn-primary" type="button" id="order">Order Now</button>
            
            </div>
            
            
            
            
            <div id="appear" align="center" style="padding: 10px; display: none;">
            
            
                <div style="padding: 10px;">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name">
                </div>
            
                <div style="padding: 10px;">
                    <label>Phone</label>
                    <input type="number" name="phone" placeholder="Phone Number">
                </div>
                
                <div style="padding: 10px;">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Address">
                </div>
            
            
                <div style="padding: 10px;">
                   
                    <input style="background-color: green" class="btn btn-success" type="submit" value="Order Confirm">
            
                    <button style="background-color: red" id="close" type="button" class="btn btn-danger">Close</button>
                </div>
                
            
            </div>
        </form>
    </div>

    <script type="text/javascript">
        
        $("#order").click(
            function()
            {
                $("#appear").show();
            }
            );

            $("#close").click(
            function()
            {
                $("#appear").hide();
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