<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <title>Calisthenics Movements</title>
</head>

<header>
    <div class="position-relative overflow-hidden p-3 m-md-3 pt-0 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Calisthenics Movements</h1>
            <p class="lead font-weight-normal">@yield('subtitle')</p>
            <a class="btn btn-outline-secondary" href="{{Route("index")}}">Home</a>
            <a class="btn btn-outline-secondary" href="{{Route("create")}}">New</a>
            <a class="btn btn-outline-secondary" href="{{Route("last.created")}}">Recently created</a>


        </div>
    </div>
</header>

<body>
    @yield('content')
</body>

<footer class="py-5 m-0 mt-5 bg-light">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <p class="copyright">&copy; Copyright: Guilherme Freitas da Silva. 2020</p> <!--&copy icon of (unicode)-->
        </div>
    </div>
</footer>
</html>
