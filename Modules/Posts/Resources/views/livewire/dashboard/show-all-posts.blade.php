<div class="col-8">
        <h2>All Posts</h2>
        @livewire('posts::small-components.notification')
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col-1">No</th>
                <th scope="col-5">Title</th>
                <th scope="col-3">Category</th>
                {{-- <th scope="col">Header</th> --}}
                <th scope="col-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="col-1">{{ $loop->iteration }}</td>
                        <td class="col-5"><span class="fw-bolder">{{ $post->title }}</span></td>
                        <td class="col-3">{{ $post->category->name }}</td>
                        <td class="col-3">
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                            <button wire:click="destroy({{ $post->id }})" type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                        {{-- <td>text</td> --}}
                    </tr>
                @endforeach
            </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
