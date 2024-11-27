@extends('layouts.base')
	
@section('content')

    @can('create', App\Models\Pokemon::class)
        <a href="{{ url('pokemon/create') }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create Pokemon</a>
    @endcan

    <br><br>

    @foreach($pokemon as $entity)
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $entity->name }}</h5>
            <img src="{{ asset($entity->image) }}" alt="">
            <p class="font-normal text-gray-700 dark:text-gray-400">Type: {{ $entity->type }}</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">Power: {{ $entity->power }}</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">Trainer: {{ $entity->trainer->name }}</p>
            <br>
            <a href="{{ url('pokemon/'.$entity->id.'/edit') }}" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
            <br><br>
            <form action="{{ url('pokemon/'.$entity->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
            </form>
        </div>
        
        @endforeach
@endsection