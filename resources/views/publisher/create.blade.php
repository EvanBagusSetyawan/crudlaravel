@include('layout.header')
        <h3>Create Writer</h3>
        <form action={{ route('publisher.store') }} method="post">
        @csrf
        <div class="form-group">
            <label for="nama_penerbit">Added the Author</label>
            <input type="text" name="nama_penerbit" id="" placeholder="publisher Name" required>
            <button type="submit" class="tombol">Submit</button>
        </div>
        </form>
@include('layout.footer') 