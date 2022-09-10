<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
            body {
                background-image: url("https://scontent.fceb2-2.fna.fbcdn.net/v/t39.30808-6/286466313_5269520773131822_3138530027505897309_n.jpg?stp=dst-jpg_p960x960&_nc_cat=100&ccb=1-7&_nc_sid=730e14&_nc_ohc=MaRXFysPJMkAX8115A6&_nc_oc=AQktjIAjeySaNmWYvSN2f43iHStonn00Go6f1ugaUY-ymGe2keIr9zvw19N58RmHp8w4JxLAhedVZtEcxR4rFW__&_nc_ht=scontent.fceb2-2.fna&oh=00_AT87dbyobEjYseU4JoqYErWsUVyGCLTn4GaOBh4HvTLcPg&oe=62A63E8C");
                font-family: 'Nunito', sans-serif;
                background-position:center;
                background-repeat:no-repeat;
                background-size:cover;
            }
        </style>
</head>

<body>
    <div>
        @include('layouts.includes.navbar')
    </div>
    <br>
    <div class="container">
        @yield('content')
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script> -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
