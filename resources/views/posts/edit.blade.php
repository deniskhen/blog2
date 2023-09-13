@include('layouts.header')

<div class="main_edit">
<h2>Редактировать {{ $post->title }}</h2>
<form action="{{ route('posts.update', [$post]) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
    <label for="title" class="form-label">
        <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control">
    </label>
    </div>
    <div class="mb-3">
    <label for="content" class="form-label">
        <textarea name="content" id="content" cols="30" rows="10" class="form-control">
            {{ $post->content }}
        </textarea>
    </label>
    </div>
    <div class="mb-3">
    <label for="description" class="form-label">
        <textarea name="description" id="description" cols="30" rows="3" class="form-control">
            {{ $post->description }}
        </textarea>
    </label>
    </div>
    <div class="mb-3 form-check">
    <label for="is_published" class="form-check-label">
        <input type="checkbox" class="form-check-input" name="is_published" id="is_published" {{ $post->is_published ? 'checked' : '' }}>
    </label>
    <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
</div>
<form action="{{ route('posts.destroy', [$post]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-primary">
        Удалить
    </button>
</form>

<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

@include('layouts.footer')


{{--если наоборот: создать страницу с хедером и с футером и в нее вставлять через --}}
{{--команду @yield все остальные страницы--}}

{{--ckeditor laravel blade подключить к проекту полноценный текстовый редактор
https://themewp.inform.click/kak-ustanovit-i-ispolzovat-ckeditor-v-laravel/
https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/predefined-builds.html#classic-editor
https://ckeditor.com/docs/ckeditor5/latest/installation/integrations/laravel.html
https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/quick-start.html--}}
