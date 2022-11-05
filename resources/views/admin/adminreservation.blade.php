<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
	<title>The Red Chamber</title>
	<style>
		.eachlabel {
border-radius: 5px;
background-color: #000000;
padding: 20px;
width: 190%;
margin-left: 5%
}

#customers {
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 190%;
margin-left: 5%;
}

#customers td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}

#customers tr:nth-child(even){background-color: #000000;}

#customers tr:hover {background-color: rgb(255, 69, 69);}

#customers th {
padding-top: 12px;
padding-bottom: 12px;
text-align: center;
background-color: #f06c5b;
color: white;
}

table{
margin-top: 30px;
}

.space{
margin-bottom: 3%;
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
	</style>
   @include("admin.admincss")
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")




  	<div style="position: relative; top: 70px; right: -150;">


  		<table id="customers" bgcolor="grey" border="1px">
			<h3 class="eachlabel" style="text-align: center">Reservations</h3>
  			<tr style="text-align: center">
  				<th style="padding: 30px;">Name</th>
  				<th style="padding: 30px;">Email</th>
  				<th style="padding: 30px;">Phone</th>
  				<th style="padding: 30px;">Date</th>
  				<th style="padding: 30px;">Time</th>
  				<th style="padding: 30px;">Message</th>
  				

  			</tr>

  			@foreach($data as $data)

  			<tr align="center">

  				<td>{{$data->name}}</td>
  				<td>{{$data->email}}</td>
  				<td>{{$data->phone}}</td>
  				<td>{{$data->date}}</td>
  				<td>{{$data->time}}</td>
  				<td>{{$data->message}}</td>
  				



  			</tr>

  			@endforeach






  		</table>
  		





  	</div>

  
  </div>

   @include("admin.adminscript")


  </body>
</html>