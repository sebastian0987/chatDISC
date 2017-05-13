<?php
header("HTTP/1.1 303 See Other");
?>
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!--<meta charset="utf-8" http-equiv="refresh" content="5" >-->
    <title>HTML Chat</title>
    <style rel="stylesheet">

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #contents {
            width: 500px;
            margin: auto;
        }

        #wrapper {
            height: 520px;
            overflow: auto;
        }

        body {
            background-color: #edecec;
            /* font-family: 'OverlockRegular', Arial, sans-serif; */
        }

        .logo {
            margin: auto;
            /* background: url("../gfx/logo.png") no-repeat; */
            width: 260px;
            height: 100px;
        }

        .bubble-avatar {
            height: 50px;
            width: 50px;
            float: left;
            margin-right: 20px;
        }

        .bubble-text {
            height: 50px;
            display: table;
        }

        .bubble-text p {
            display: table-cell;
            vertical-align: middle;
            font-size: 16px;
        }

        .bubble-quote {
            /* background: url("../gfx/quote.png") no-repeat; */
            background-position: top right;
            float: right;
            position: absolute;
            left: 45px;
            top: -10px;
            height: 30px;
            width: 30px;
        }

        .bubble {
            display: inline-block;
            position: relative;
            clear: both;
            background-color: #ffffff;
            width: 98%;
            border: 1px solid #bfc2c4;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
        }

        .bubble-container {
            padding-top: 8px;
            width: 98%;
        }

        .form input, .form textarea {
            border: 1px solid #bfc2c4;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);

        }

        .form input[type="text"], .form input[type="password"] {
            border: 1px solid #c9c9c9;
            color: #404040;
            font-size: 11px;
            height: 28px;
            margin-bottom: 3px;
            padding: 0 6px;
        }

        /* Button */
        .button {
            font-size: 12px;
            display: inline-block;
            padding: 5px 16px;
            box-shadow: rgba(0, 0, 0, 0.14902) 0px 1px 3px;
        }

        .button:hover .arrow {
            background-color: #03a5d1;
        }

        .button:visited {
            color: #ffffff;
        }

        b{
            text-decoration: underline;
        }

        .button, input[type="submit"], input[type="reset"], button {
            background: #03a5d1;
            border: 1px;
            color: #fff;
            cursor: pointer;
            font-weight: 400;
            height: auto;
            overflow: visible;
            padding: 7px 20px;
            -webkit-transition: background-color .2s ease;
            -moz-transition: background-color .2s ease;
            -ms-transition: background-color .2s ease;
            -o-transition: background-color .2s ease;
            transition: background-color .2s ease;
            width: auto;
        }

        .button:hover, input[type="submit"]:hover, input[type="reset"]:hover, button:hover {
            background: #3a3a3a;
            color: #fff;
        }
    </style>
</head>
<body>


<div class="logo"></div>

<div id="contents">
    <div id="wrapper">
        <div class="bubble-container">


            <ul>
                @foreach($mensajes as $mensaje)
                    <div class="bubble-container"><span class="bubble"><p><b>{{ $mensaje["usuario"]  }}</b><sup><i>{{ $mensaje["fecha"]  }}</i></sup></p><p>{{ $mensaje["texto"]  }}</span></div>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<center>
    <div id="form">
        <form method="POST">
            {!! csrf_field() !!}
            <div>
            <input type="text" name="usuario" placeholder="Usuario">
            </div>
            <div>
            <input type="text" name="mensaje" placeholder="Mensaje">
            </div>
            <button type="submit">Enviar</button>
        </form>
        <script>
            function myFunction() {
                location.reload();
            }
        </script>
    </div>
</center>

</body>
</html>