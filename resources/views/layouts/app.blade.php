<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://use.fontawesome.com/9879921d1f.js"></script>
  <title>Главная</title>
</head>

<body>
  <div class="container">
    <header class="header_container">
      <div class="row">
        <div class="col-md-8">
          <h1>Книга Рецептов</h1>
        </div>
        <div class="col-md-4">
          <h2>
            Login/Registrate
          </h2>
        </div>
      </div>
    </header>
    <div class="content">
      <div class="row">
        <div class="col-md-4 brd sidebar">
          <h5 class="brd_down">
            <a href="recepts_list.html">Рецепты</a>
          </h5>
          <h5 class="brd_down">
            <a href="ingredients.html">Ингридиенты</a>
          </h5>
        </div>
        <div class="col-lg-8 brd content">
          @yield('content')
        </div>
      </div>
    </div>
  </div>






  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>