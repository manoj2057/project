@csrf
<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <a href="/blog/create">Create Product</a>
                <table width="900" align="center">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Author</td>
                        <td>Address</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->desc, 0, 50) }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ $post->place }}</td>

                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>


                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</x-admin.layout>
