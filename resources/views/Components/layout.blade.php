<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sun Jobs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class = "px-10 bg-black text-white font-hanken-grotesk pd-10">
    <div >

        <nav class="flex justify-between items-center  py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Logo">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">post</a>   
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form> 
                </div>
            @endauth

            @guest()
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986] mx-auto">
            {{$slot}}
        </main>
</div>
    </body>
</html>