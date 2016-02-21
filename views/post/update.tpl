<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Edit {$post->title}</h1>
        <img style="width: 150px; height: auto; margin: 0 auto; display: block;" src="assets/img/post/{$post->picture}">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="row">
                <input type="file" name="picture">
            </div>
            
            <div class="row">
                <br>
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" value="{$post->title}" required>
            </div>
            
            <div class="row">
                <br>
                <strong>Description</strong>
                <textarea name="description">{$post->description}</textarea>
            </div>
            
            <div class="row">
                <br>
                <input type="submit" value="Add" class="btn btn-default pull-right">
            </div>
        </form>
    </div>
</div>
<div class="row margin50"></div>