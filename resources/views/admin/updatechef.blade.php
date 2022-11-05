<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

  	<base href="/public">
   
   @include("admin.admincss")
   <style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 4px;
        box-sizing: border-box;
}
    input[type=num], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 4px;
        box-sizing: border-box;
}

    input[type=submit] {
        width: 100%;
        background-color: #f06c5b;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
}

input[type=submit]:hover {
  background-color: #ffa89c;
}

.eachlabel {
  border-radius: 5px;
  background-color: #000000;
  padding: 20px;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
  text-align: left;
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
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")

      <div class="eachlabel" style="position: relative; top: 60px; right: -150px; width: 70%; margin-bottom: 5%">
		<h3 class="eachlabel" style="text-align: center">Update Food Item</h3>
  	<form action="{{url('/updatefoodchef',$data->id)}}" method="Post" enctype="multipart/form-data">


  		@csrf
  		
  		<div class="eachlabel">
  			<label>Chef Name</label>
  			<input style="color:blue;" type="text" name="name" value="{{$data->name}}">

  		</div>

  		<div class="eachlabel">
  			<label>Speciality</label>
  			<input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}">

  		</div>


  		<div class="eachlabel">
  			<label>Old Image</label>
  			<img height="200" width="200" src="/chefimage/{{$data->image}}">

  		</div>



  		<div class="eachlabel">
  			<label>New image</label>
  			<input type="file" name="image">

  		</div>

  		<div class="eachlabel">
  			
  			<input style="color:white;" type="submit" value="Update Chef" required="">

  		</div>
  	</form>

        </div>
  </div>

   @include("admin.adminscript")


  </body>
</html>