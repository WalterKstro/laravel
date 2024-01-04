@if(session('message'))
    <p class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 max-w-60">{{session('message')}}</p>
@endif
