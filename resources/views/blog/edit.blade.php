@csrf
<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <!-- Form -->




                <form action="/blog/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Description</label>
                        <textarea name="desc" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="category_id" class="form-control">
                            <option value="0" selected> Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="place">Address</label>
                        <input type="text" name="place" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" name="img" class="form-control" autocomplete="off" required>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                </form>

                <!--/Form -->
            </div>
        </div>
    </div>
</x-admin.layout>
