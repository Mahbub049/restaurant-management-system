<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   
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
  background-color: #f06c5b;
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


  	<div style="position: relative; top: 60px; right: -150px">
        <h3 class="eachlabel" style="text-align: center">ADD Food Item</h3>
  		
  		<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

  			@csrf

  			
  			<div class="eachlabel">
  				<label>Title</label>
  				<input style="color:blue;" type="text" name="title" placeholder="Write a title" required>
  			</div>

  			<div class="eachlabel">
  				<label>Price</label>
  				<input style="color:blue;" type="num" name="price" placeholder="price" required>
  			</div>

  			<div class="eachlabel">
  				<label>Image</label>
  				<input type="file" name="image"  required>
  			</div>

  			<div class="eachlabel">
  				<label>Description</label>
  				<input style="color:blue;" type="text" name="description" placeholder="Description" required>
  			</div>

  			<div class="eachlabel">
  				
  				<input style="color: black" type="submit" value="Save" >
  			</div>


  		</form>



      <div>
        
        <table id="customers" bgcolor="black">
            <h3 class="eachlabel" style="text-align: center; margin-top: 2%;">Show Food Items</h3>
          <tr style="text-align: center">
            <th style="padding: 30px; text-align: center">Food Name</th>
            <th style="padding: 30px; text-align: center">Price</th>
            <th style="padding: 30px; text-align: center">Description</th>
            <th style="padding: 30px; text-align: center">Image</th>
            <th style="padding: 30px; text-align: center">Action</th>
            <th style="padding: 30px; text-align: center">Action2</th>
            
          </tr>



          @foreach($data as $data)

          <tr align="center">
            
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>

            <td><a href="{{url('/deletemenu',$data->id)}}" class="btn">Delete</a></td>

            <td><a href="{{url('/updateview',$data->id)}}" class="btn">Update</a></td>

          @endforeach
        </table>
    <div class="space">--------------------</div>

      </div>







  	</div>


    



</div>

   @include("admin.adminscript")


  </body>
</html>