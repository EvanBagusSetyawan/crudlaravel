@include('layout.header')
        <h3>Listed Authors</h3>
        <a href="{{ route('publisher.create') }}" class="tombol">add</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Writer</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allpublisher as $key => $r)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $r->nama_penerbit }}</td>
                        <td>
                            <form action={{ route('publisher.destroy', $r->id) }} method="POST" style="display: inline-block;">
                                <a href={{ route('publisher.edit', $r->id) }} class="tombol">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="tombol" onclick="return confirm('Are you sure you want to delete this publisher?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@include('layout.footer')