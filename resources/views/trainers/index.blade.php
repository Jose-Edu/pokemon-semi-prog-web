@extends('layouts.base')
	
@section('content')

    <a href="{{ url('trainers/create') }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create Trainer</a>

    <br><br>

    @foreach($trainers as $entity)
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $entity->name }}</h5>
            <img src="{{ asset($entity->image) }}" alt="">
            <br>
            <a href="{{ url('trainers/'.$entity->id.'/edit') }}" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
            <br><br>
            <form action="{{ url('trainers/'.$entity->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
            </form>
        </div>
        
        @endforeach
@endsection