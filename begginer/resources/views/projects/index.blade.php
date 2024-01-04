@extends("layouts.default")

@section("title","Projects Page")

@section("body")
    <h1 class="text-4xl mb-4">Projects page</h1>
    @include('helpers.message-sessions')
    @auth()
        <a class="mb-2 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150" href="{{route("projects.create")}}">Create project</a>
    @endauth
    <ul class="list-disc">
        @foreach($projects as $project)
            <li><a href="{{ route("projects.show", $project) }}">{{ $project->title  }}</a></li>
        @endforeach
    </ul>

@endsection
