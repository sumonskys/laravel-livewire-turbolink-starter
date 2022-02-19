<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>

    <a href="{{ route('login') }}">Login</a></br>
    <a href="{{ route('register') }}">Register</a></br>


    {{ $slot }}


    
    @livewireScripts
</body>