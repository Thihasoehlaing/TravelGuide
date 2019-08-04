<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('libs/fontawesome/css/all.min.css') }}">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    @yield('css')
    <style>
        #travelnavbar{
            box-shadow: 0px 0px 5px 0 #595959;
        }
        .applogo {
            font-size: 30px;
            color: #262626;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: bolder;
            text-shadow: 3px 2px #808080;
        }
        .nav-link {
            color: black;
            font-weight: 300;
        }

        .nav-link:hover {
            color: white;
            background-color: #262626;
        }
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #262626;
            color: white;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: white;
            text-decoration: none;
            background-color: #262626;
        }

        .dropdown-item:hover {
            color: white;
            background-color: #262626;
        }
        .slideimg {
            width: 500px;
            height: 800px;
        }

        .carousel-caption{
            margin-bottom: 8%;
            margin-left: 15%;
            margin-right: 15%;
        }

        .placeimg{
            width: 100%;
            height: 500px;
            text-align: center;
            margin-top: 20px;
        }

    </style>