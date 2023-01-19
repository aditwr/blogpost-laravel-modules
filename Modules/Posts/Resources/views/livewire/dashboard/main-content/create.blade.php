<div class="row">
    <div class="col-8">
        @livewire('posts::small-components.notification')
        <form wire:submit.prevent='store' class="d-block row">
            <div class="mb-3 col-8">
              <label for="title" class="form-label">Post Title</label>
              <input wire:model.lazy='title' value="{{ old('title') }}" name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" >
              @error('title')
                  <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3 col-8">
              <label for="slug" class="form-label">Slug</label>
              <input wire:model='slug' name="slug" value="{{ old('slug') }}" readonly disabled type="text" class="form-control" id="slug">
              <div id="emailHelp" class="form-text">Slug is key to access post.it is generated automatically.</div>
            </div>
            <div class="mb-3 col-6">
                <select wire:model='categoryId' name="categoryId" class="form-select" aria-label="Default select example">
                    <option >Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                  @error('categoryId')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-3 col-10">
                <div class="">
                    <label for="content" class="form-label">Post Content</label>
                    <textarea wire:model='content' value="{{ old('content') }}" name="content" class="form-control"  id="content" style="height: 200px"></textarea>
                    @error('slug')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
</div>
