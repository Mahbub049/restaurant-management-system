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
  width: 300%;
}

    </style>
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
    </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>