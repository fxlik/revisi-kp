<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic,500,500italic' rel='stylesheet' type='text/css'>
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                font-weight: 300;
            }

            label {
                font-weight: 500;
            }

            .panel {
                border-radius: 0;
                margin-top: 5px;
            }
            .panel-footer {
                background-color: transparent;
                padding-top: 15px;
                padding-bottom: 15px;
            }

            .survey-list a {
                font-size: 1.75em;
            }
            .survey-list li {
                margin-bottom: 1em;
            }
        </style>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
