<div class="">
        <h2>All Posts</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                {{-- <th scope="col">Header</th> --}}
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                        {{-- <td>text</td> --}}
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
