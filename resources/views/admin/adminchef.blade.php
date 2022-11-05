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
  background-color: #c9837a;
}

.eachlabel {
  border-radius: 5px;
  background-color: #000000;
  padding: 20px;
  width: 150%;
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
    <title>The Red Chamber</title>
  </head>
  <body>
    <div class="container-scroller" >
    @include("admin.navbar")
    
    <div style="position: relative; top: 60px; right: -140px;">
        <h3 class="eachlabel" style="text-align: center">Chef Add</h3>
    <form action="{{ url('uploadchef') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="eachlabel">
            <label for="">Name</label>
            <input style="color: blue;" type="text" name="name" placeholder="Enter Name" required>
        </div>
        <div class="eachlabel">
            <label for="">Speciality</label>
            <input style="color: blue;" type="text" name="speciality" placeholder="Enter the Speciality" required>
        </div>
        <div class="eachlabel">
            <label for="">Image</label>
            <input type="file" name="image" required>
        </div>
        <div class="eachlabel">
            <input type="submit" value="Save">
        </div>
    </form>
    
    <div>
        <table id="customers" bgcolor="black" style="width: 150%">
            <h3 class="eachlabel" style="text-align: center; margin-top: 2%;">Show Food Items</h3>
            <tr>
                <th style="padding: 30px; text-align: center">Chef Name</th>
                <th style="padding: 30px; text-align: center">Speciality</th>
                <th style="padding: 30px; text-align: center">Image</th>
                <th style="padding: 30px; text-align: center">Action</th>
                <th style="padding: 30px; text-align: center">Action2</th>
    
            </tr>
    
    
            @foreach($data as $data)
    
            <tr align="center">
            
                <td>{{$data->name}}</td>
                <td>{{$data->speciality}}</td>
                <td><img height="200" width="200" src="/chefimage/{{$data->image}}"></td>
                <td><a class="btn" href="{{url('/updatechef',$data->id)}}">Update</a></td>
                <td><a class="btn" href="{{url('/deletechef',$data->id)}}">Delete</a></td>
            </tr>
    
            @endforeach
        </table>
    </div>
    <div style="margin-top: 7%">
        --------
    </div>
    </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>