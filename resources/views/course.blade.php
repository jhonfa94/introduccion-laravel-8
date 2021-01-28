@extends('layouts.web')

@section('content')

    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-1 p-8 bg-gray-200">
            <ul class="flex flex-col">
                <li class="mb-4 text-sm font-medium text-gray-400 uppercase">
                    Contenido
                </li>
                @foreach ($course->post as $post)
                    <li class="flex items-center mt-2 text-gray-600">
                        {{ $post->name }}
                        @if ($post->free)
                            <span class="ml-auto text-xs font-semibold text-gray-500 bg-gray-300 rounded-full">Gratis</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-span-2 text-gray-700">
            <img src="{{ $course->image }}" class="">
            <h2 class="text-4xl">{{ $course->name }}</h2>
            <p>{{ $course->description }}</p>
            <div class="flex ml-3">
                <img src="{{ $course->user->avatar }}" class="w-10 h-10 mx-auto mr-2 rounded-full ">
                <div>
                    <p class="text-sm text-gray-500">{{ $course->user->name }}</p>
                    <p class="text-xs text-gray-300">{{ $course->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 my-8">
                @foreach ($course->similar() as $course)
                    <x-course-card :course="$course" />
                    {{-- <div class="px-4 py-6 text-center bg-white rounded-lg shadow-lg">
                        <a href="{{ route('course', $course->slug) }}">
                            <img src="{{ $course->image }}" class="mb-2 rounded-md">
                            <h2 class="text-lg text-gray-600 uppercase truncate">{{ $course->exerpt }}</h2>
                            <h3 class="text-gray-500 text-md">{{ $course->name }}</h3>
                            <img src="{{ $course->user->avatar }}" class="h-16 mx-auto mt-4 rounded-full w-15">
                        </a>
                    </div> --}}
                @endforeach
            </div>
        </div>
    </div>

    <div class="mt-4 text-center">
        Detalle del curso
        <h1 class="mb-2 text-3xl text-gray-700 uppercase">Últimos Cursos</h1>
        <h2 class="text-xl text-gray-600">Fórmate online como profesional en tecnología</h2>
    </div>

    <livewire:course-list>

    @endsection
