<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.styles')
    <title>{{config('app.name', 'crus-laravel-5.7')}}</title>
</head>
<body>
    <div class="container">
        {{-- Navigation --}}
        @include('partials.navbar') 
        {{-- End Navbar --}} 
        @include('partials.messages')
        @yield('content')
        @include('partials.footer')
    </div>
    @include('partials.scripts')
    <script type="text/javascript">
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'            
         });
    </script>
</body>
</html>