<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Red Chamber</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    
</head>
<body>
    <x-app-layout>

    </x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include("admin.admincss")
        <style>
		.eachlabel {
border-radius: 5px;
background-color: #000000;
padding: 20px;
width: 200%;
margin-left: -10%;
}

#customers {
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 200%;
margin-left: -10%;
}

#customers td, #customers th {
border: 1px solid #ddd;
padding: 10px 50px 10px 50px;
;
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
        <title>The Red Chamber</title>
      </head>
      <body>
        <div class="container-scroller">
            @include("admin.navbar")
        
            <div style="position: relative; top: 60px; right: -150px">
                <table id="customers" bgcolor="grey" border="3px">
                  <h3 class="eachlabel" style="text-align: center">Users</h3>  
                  <tr >
                        <th style="padding: 5%">Name</th>
                        <th style="padding: 5%">Email</th>
                        <th style="padding: 5%">Action</th>
                    </tr>
                    @foreach ($data as $data)
                    <tr align="center">
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>

                        @if($data->usertype=="0")
                            <td><a class="btn" href="{{ url('/deleteuser',$data->id) }}">Delete</a></td>
                        @else
                            <td><a class="btn" href="">Not Allowed</a></td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
        
        @include("admin.adminscript")
      </body>
    </html>
</body>
</html>