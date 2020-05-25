<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
    <form method="post" action="lab1/people">
        <input type="text" name="firstName" placeholder="First name">
        <input type="text" name="lastName" placeholder="Last name">
        <input type="submit" value="Search">
    </form>
    </body>
</html>
