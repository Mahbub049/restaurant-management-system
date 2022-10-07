<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>

    </x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include("admin.admincss")
      </head>
      <body>
        <div class="container-scroller">
        @include("admin.navbar")
        
        <div style="position: relative; top:60px; right: -150px">
            <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Title</label>
                    <input style="color: blue;" type="text" name="title" id="" placeholder="Write a title" required>
                </div>
                <div>
                    <label for="">Price</label>
                    <input style="color: blue;" type="number" name="price" id="" placeholder="Price" required>
                </div>
                <div>
                    <label for="">Image</label>
                    <input type="file" name="image" id="" required>
                </div>
                <div>
                    <label for="">Description</label>
                    <input style="color: blue;" type="text" name="description" id="" placeholder="Write a Description" required>
                </div>
                <div>
                    <input style="background-color: White; Color: black" type="submit" value="Save">
                </div>
            </form>
        </div>
        </div>
        @include("admin.adminscript")
      </body>
    </html>
</body>
</html>