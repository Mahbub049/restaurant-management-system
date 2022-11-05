<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head> 
   @include("admin.admincss")
   <style>

.container{
    margin-left: 10%; 
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

.eachlabel {
  border-radius: 5px;
  background-color: #000000;
  padding: 20px;
}

table{
    margin-top: 30px;
}

.space{
    margin-bottom: 3%;
}
input[type=text], select {
        width: 93%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 4px;
        box-sizing: border-box;
}

   </style>
  </head>
  <body>  
   <div class="container-scroller">
  	@include("admin.navbar") 

        <div class="container">
            <h3 class="eachlabel" style="text-align: center; margin-top: 2%;">Show Food Items</h3>
        <form action="{{url('/search')}}" method="get">
        @csrf
        <input type="text" name="search" style="color:blue;">
        <input type="submit" value="Search" class="btn btn-success">
        </form>
        <table id="customers">
            <tr align="center">
                <th style="padding: 20px; text-align: center;">Name</th>
                <th style="padding: 20px; text-align: center;">Phone</th>
                <th style="padding: 20px; text-align: center;">Address</th>
                <th style="padding: 20px; text-align: center;">Foodname</th>
                <th style="padding: 20px; text-align: center;">Price</th>
                <th style="padding: 20px; text-align: center;">Quantity</th>
                <th style="padding: 20px; text-align: center;">Total Price</th>
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->foodname}}</td>
                <td>{{$data->price}}৳</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->price * $data->quantity}}৳</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
   @include("admin.adminscript")


  </body>
</html>



