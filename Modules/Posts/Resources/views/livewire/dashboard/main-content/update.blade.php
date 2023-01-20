<div class="row">
    <div class="col-8">
        <form wire:submit.prevent='update' class="d-block row">
            <div class="mb-3 col-8">
                <label for="title" class="form-label">Post Title</label>
                <input wire:model.lazy='title' value="{{ old('title') }}" name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" >
                @error('title')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror

                <br>

                <label for="slug_field" class="form-label">Slug</label>
                <input wire:model='slug' name="slug" value="{{ old('slug') }}"  readonly disabled type="text" class="form-control @error('slug') is-invalid @enderror" id="slug_field">
                {{-- <div class="form-text">Slug is key to access post.it is generated automatically.</div> --}}
                @error('slug')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror

                <br>

                <label for="category" class="form-label">Category</label>
                <select wire:model='categoryId' id="category" name="categoryId" class="form-select w-50 @error('categoryId') is-invalid @enderror">
                    <option value='0' >Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('categoryId')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror

                <br>

                <label for="content" class="form-label">Post Content</label>
                <textarea wire:model='content' name="content" value="{{ old('content') }}"  class="form-control @error('content') is-invalid @enderror"  id="content" style="height: 200px"></textarea>
                @error('content')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror

                <br>
                <div class="">
                    @if (($title != "")&&($slug !== "")&&($content != "")&&($categoryId != 0))
                        <button type="submit" class="btn btn-primary">Edit Post</button>
                    @else
                        <button disabled type="submit" class="btn btn-primary">Edit Post</button>
                        <br>
                        <p class="form-text text-info">*please fill up all input field to create post</p>
                    @endif
                </div>

            </div>
        </form>
    </div>
</div>
