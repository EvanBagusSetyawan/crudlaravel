@include('layout.header')
    <h3>Edit Writer</h3>
    <form action={{ route('publisher.update', $publisher->id) }} method="POST">
    @csrf
    @method('POST')
        <div class="form-group">
            <label for="nama_penerbit">Edit author name :</label>
            <input type="text" name="nama_penerbit" id="" value={{
                $publisher->nama_penerbit }}>
            <button type="submit" class="tombol">Update</button>
        </div>
    </form>
@include('layout.footer')