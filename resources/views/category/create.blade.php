@include('layout.header')
        <h3>Create Title</h3>
        <form action={{ route('category.store') }} method="POST">
        @csrf
        <div class="form-group">
            <label for="">Add title book :</label>
            <input type="text" name="name_category" id="" placeholder="Enter Category Name" required>
            <button type="submit" class="tombol">Submit</button>
        </div>
        </form>
        
@include('layout.footer')