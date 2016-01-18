<!DOCTYPE html>
<html>
    <head>
        <title>Page not found...</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 20px;
            }

            ul {
                font-size: 25px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">404</div>
                <div class="title">You should not be here!</div>
                <h2>Some links to get you out:</h3>
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li><a href="/art">Auctions</a></li>
                    <li><a href="/FAQ">FAQ</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
