@csrf
<div class="mb-3">
    <label for="title" class="form-label">Title project</label>
    <input
        type="text"
        class="form-control"
        id="title"
        aria-describedby="title"
        value="{{ old('title', $project->title )}}"
        name="title">
</div>
<div class="mb-3">
    <label for="slug" class="form-label">Slug project</label>
    <input
        type="text"
        class="form-control"
        id="slug"
        aria-describedby="slug"
        value="{{old('slug',$project->slug)}}"
        name="slug">
</div>
<div class="mb-3">
    <label for="extract" class="form-label">Extract project</label>
    <textarea
        class="form-control"
        id="extract"
        rows="16"
        cols="32"
        name="extract">{{old('extract',$project->extract)}}</textarea>
</div>
<button type="submit" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">{{$btn}}</button>
