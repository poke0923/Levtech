<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>
    <body>
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
        <h1>Blog Name</h1>
        <br>
        
        @foreach($questions as $question)
        <a href="https://teratail.com/questions/{{ $question['id'] }}">
        <p>{{$question['title']}}</p>
        </a>
        @endforeach
        
        
                       </div>
            </div>
        </div>
    </div>
    </body>


</x-app-layout>
</html>
