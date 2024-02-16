<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MasAlcance</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <div class="container-fluid">
              <span id="nav_text" class="navbar-brand">Mas Alcance</span>
            </div>
        </nav>

        @yield('content')
    </div>
    
    <div class="logo">
        <img src="https://www.masalcance.com/wp-content/uploads/2021/07/Logo-slogan-lateral-e1676656527690.png" alt="">
    </div>
</body>
</html>