@extends("layouts.default")
@section("title","Projects | ". $project->title)
@section("body")
    <h1 class="text-2xl">{{$project->title}}</h1>
    @include('helpers.message-sessions')
    <p>{{$project->extract}}</p>
    @auth()
        <div class="flex gap-4">
            <a class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150" href="{{route("projects.edit",$project)}}">Editar</a>
            <form action="{{route('projects.destroy',$project)}}" method="post">
                @csrf @method("DELETE")
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">Eliminar</button>
            </form>
        </div>
    @endauth
@endsection
