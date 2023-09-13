@include('layouts.header')

<div class="main_edit">
    <h2>Создать новый пост</h2>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">
            Title:
            <input type="text" name="title" id="title" class="form-control" required>
        </label>
        </div>
        <div class="mb-3">
        <label for="content" class="form-label">
            Content:
            <textarea name="content" id="content" cols="30" rows="10" class="form-control" required></textarea>
        </label>
        </div>
        <div class="mb-3">
        <label for="description" class="form-label">
            Description:
            <textarea name="description" id="description" cols="30" rows="3" class="form-control" required></textarea>
        </label>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
    </div>

@include('layouts.footer')



