<!-- Creo il layout da poter riutilizzare nelle varie pagine  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('titolo')</title>
</head>
<body>
    <!-- includeo l'header che si trova nella cartella partials  -->
    @include('partials.header')

    <main>
    	{{-- qui dentro il contenuto sarà variabile, quindi usero @yields come segnaposto, ogni @yield avrà il suo nome specifico --}}
        @yield('mainContent')
    </main>

    <!-- includo il footer che si trova nella cartella partials  -->
    @include('partials.footer')
</body>
</html>