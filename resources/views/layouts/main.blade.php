<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Search</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <livewire:styles />
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
    	<div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
    		<ul class="flex flex-col md:flex-row items-center">
    			<li>
    				<a href="{{ route('movies.index') }}"><i class="fa fa-film"></i> Movie App</a>
    			</li>
    			<li class="md:ml-16 md:mt-0">
                <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
    			</li>
    			<li class="md:ml-6 md:mt-0">
    				<a href="#" class="hover:text-gray-300">TV Shows</a>
    			</li>
    			<li class="md:ml-6 md:mt-0">
    				<a href="#" class="hover:text-gray-300">Actors</a>
    			</li>
            </ul>
            
            <div class="flex flex-col md:flex-row items-center">
                
               <livewire:search-dropdown>


                <div class="md:ml-4 md:mt-0 mt-3">
                    <a href="#">
                        <i class="fa fa-user rounded-full w-8 h-8"></i>
                    </a>
                </div>
            </div>
    	</div>

    </nav>
    
    @yield('content')
    <livewire:scripts />
</body>
</html>