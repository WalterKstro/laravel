@extends("layouts.default")

@section("title","Projects Create")

@section("body")
    <h1 class="mb-4 text-2xl">Projects create</h1>
    @include('helpers.validation-alerts')
    <form method="POST" action="{{ route("projects.store") }}">
        @include('helpers.form-fields',['btn'=>'Crear'])
    </form>
@endsection
