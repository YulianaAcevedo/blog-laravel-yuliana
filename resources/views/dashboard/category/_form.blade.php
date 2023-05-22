<div>
    <label for="title">Nombre:</label>
    <input type="text" name="title" id="title" value="{{ old('title', $category->title ?? '') }}">
    @error('title')
        <span>{{ $message }}</span>
    @enderror
</div>

<div>
    <label for="slug">Descripción:</label>
    <textarea name="slug" id="slug">{{ old('slug', $category->slug ?? '') }}</textarea>
    @error('slug')
        <span>{{ $message }}</span>
    @enderror
</div>
