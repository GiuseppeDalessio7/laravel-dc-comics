<div class="container">
    <div class="row">
        <form action="{{ route('comics.store') }}" method="post" class="row g-3" enctype="multipart/form-data">

            @csrf

            <div class="col-md-4">
                <label for="title" class="form-label">Title Comic</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="">
                <label for="thumb" class="form-label">Choose file</label>
                <input type="file" class="form-control" name="thumb" id="thumb" placeholder=""
                    aria-describedby="cover_image_helper">
                <div id="cover_image_helper" class="form-text">Upload an image for the current product</div>
            </div>

            <div class="col-md-4">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label">Price in $</label>
                <input type="text" class="form-control" name="price" id="price" required>
            </div>
            <div class="col-md-4">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" required>
            </div>
            <div class="col-md-4">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date">
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type">
            </div>
            <div class="col-md-4">
                <label for="artist" class="form-label">Artist</label>
                <input type="text" class="form-control" name="artist" id="artist">
            </div>
            <div class="col-md-4">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers" id="writers">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Add Comic</button>
            </div>
        </form>

    </div>
</div>
</div>
