<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Search</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
    	<div class="container mx-auto flex items-center justify-between px-4 py-6">
    		<ul class="flex items-center">
    			<li>
    				<a href="#"><i class="fa fa-film"></i> Movie App</a>
    			</li>
    			<li class="ml-16">
    				<a href="#" class="hover:text-gray-300">Movies</a>
    			</li>
    			<li class="ml-16">
    				<a href="#" class="hover:text-gray-300">TV Shows</a>
    			</li>
    			<li class="ml-16">
    				<a href="#" class="hover:text-gray-300">Actors</a>
    			</li>
    		</ul>
    	</div>

    </nav>
    

    @yield('content')
</body>
</html>