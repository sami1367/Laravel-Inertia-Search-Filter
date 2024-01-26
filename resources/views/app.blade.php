<!DOCTYPE html>
<html>
  <head>
    <!-- Set the character set for the document -->
    <meta charset="utf-8" />
    
    <!-- Set the viewport properties for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Nina Assessment</title>

    <!-- Include Bootstrap CSS from Cloudflare CDN with SRI integrity and crossorigin attribute -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Include Vite-generated JavaScript file for the application -->
    @vite('resources/js/app.js')
    
    <!-- Include head elements provided by Inertia.js -->
    @inertiaHead
  </head>
  <body>
    <!-- Render the Inertia app -->
    @inertia
  </body>
</html>
