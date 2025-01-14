@include('layout.header')
    <h3>Create Title</h3>
    <form action={{ route('category.update', $category->id) }} method="POST">
    @csrf
    @method('POST')
        <div class="form-group">
            <label for="name_category">Edit book Title :</label>
            <input type="text" name="name_category" id="" value={{
                $category->name_category }}>
            <button type="submit" class="tombol">Update</button>
        </div>
    </form>
@include('layout.footer')