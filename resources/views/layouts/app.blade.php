<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Literie3000</title>
</head>
<body>
    <header class="bg-white h-16">
        <div class="flex justify-around items-center h-16">
            <div>
                <img src="/uploads/logo.png" alt="logo">
            </div>
            <div class = "flex items-center">
                <nav>
                    <a class="bg-green-500 rounded text-xl"  href="/connect">Se connecter</a>                               
                </nav>
            </div>
        </div>
    </header>

    <div class="max-w-screen-xl mx-auto p-4 min-h-screen">
        @yield('content')
    </div>
    

    <footer class="bg-red-600 flex">
        <div class="m-auto"> Literie3000 &copy;{{ date('Y') }} </div>
    </footer>

</body>
</html>