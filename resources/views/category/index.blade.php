@include('layout.header')
        <h3>Recorded Book</h3>
        <a href={{ route('category.create') }} class="tombol">add</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title book</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allCategory as $key => $r)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $r->name_category }}</td>
                    <td>
                        <form action={{route('category.destroy', $r->id)}} method="POST">
                            <a href={{ route('category.edit', $r->id)}} class="tombol">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tombol">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
@include('layout.footer')