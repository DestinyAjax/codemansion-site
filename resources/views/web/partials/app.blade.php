<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>CodeMansion Technology Official Website</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="CodeMansion Technology" name="author" />
        
        <!-- css files goes here -->

        <!-- css files ends here -->
    </head>
    <body>
        @include('web.partials.header')
        @include('web.partials.nav')

        @yield('content')

        @include('web.partials.footer')
        
        <!-- Javascript files goes here -->

        <!-- ends here -->
    </body>
</html>