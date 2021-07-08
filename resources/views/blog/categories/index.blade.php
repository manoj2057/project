@csrf
<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <a href="/blog/categories/create">Create Post</a>
                <table width="900" align="center">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Description</td>

                    </tr>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ substr($category->desc, 0, 50) }}</td>

                            <td>
                                <a href="/blog/categories/edit/{{ $category->id }}">Edit</a>
                                <a href="/blog/categories/destroy/{{ $category->id }}">Delete</a>


                            </td>


                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</x-admin.layout>
