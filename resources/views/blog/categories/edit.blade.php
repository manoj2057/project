@csrf
<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <!-- Form -->



                <form action="/blog/categories/update/{{ $category->id }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">name</label>
                        <input type="text" name="name" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Description</label>
                        <textarea name="desc" class="form-control" rows="5" required></textarea>
                    </div>


                    <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                </form>

                <!--/Form -->
            </div>
        </div>
    </div>
</x-admin.layout>
