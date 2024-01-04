@extends("layouts.default")

@section("title","Projects update")

@section("body")
    <h1>Projects update</h1>
    @include('helpers.validation-alerts')
    <form method="POST" action="{{ route("projects.update",$project) }}">
        @method('PUT')
        @include('helpers.form-fields',['btn'=>'Editar'])
    </form>
@endsection
