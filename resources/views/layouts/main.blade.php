<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--- link rel="stylesheet" type="text/css" href="style.css"--->
    <style> 
       html, body {
       height: 100%;
       margin: 0;
      }
      .content{
      min-height: 100%;
      margin-bottom: -50px;
      }
      .footer, .push {
      height: 50px;
      }
      .footer {
      background-color: #474747;
      }
      .footer_container {
      margin-left: 100px;
      padding-top: 15px;
      color: #dbdbdb;
}

    </style>
    <title>Midas learing | {{$title}}</title>
  </head>
  <body>

<!--- navbar (Header) --->
  @include('partials.navbar')

<!--- content --->
    <div class="content">
     <div class="container mt-4">
        @yield('container')
     </div>
     <div class="push"></div>
    </div>

<!--- Footer --->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @include('partials.footer')
      </body>
</html>
