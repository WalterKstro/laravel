@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 max-w-96">{{$error}}</li>
        @endforeach
    </ul>
@endif
