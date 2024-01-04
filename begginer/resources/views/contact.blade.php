@extends("layouts.default")
@section("title","Contact Page")
@section("body")
    <h1 class="mb-4 text-2xl">Contact</h1>

    <form action="{{route("send")}}" method="post">
        @csrf
        <div>
            <input type="text" name="name" id="name" placeholder="Name" value="{{old("name")}}">
            @error("name")<span class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 max-w-96">{{ $message  }}</span>@enderror
        </div>
        <div>
            <input type="text" name="email" id="email" placeholder="Email" value="{{old("email")}}">
            {{ $errors->first('email'), '<span>:message</span>'  }}
        </div>
        <div>
            <input type="text" name="subject" id="subject" placeholder="Subject" value="{{old("subject")}}">
            @error("subject")<span>{{ $message  }}</span>@enderror
        </div>
        <div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message">{{old("message")}}</textarea>
            @error("message") <span>{{ $message  }}</span>@enderror
        </div>
        <div><button type="submit" class="mb-2 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">{{__("Send")}}</button></div>
    </form>
@endsection
