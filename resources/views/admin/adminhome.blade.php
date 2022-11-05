<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    <title>The Red Chamber</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    </div>
    @include("admin.adminscript")
  </body>
</html>