<div class="row">
    <div class="container">
        <h1 class="text-center">{$post->title}</h1>
        <div class="col-md-6">
            <img class="img-responsive" src="assets/img/post/{$post->picture}">
        </div>
        <div class="col-md-6">
            <small>{$post->updated_at} author {$post->user->username}</small>
            {$post->description}
        </div>
        {if $smarty.session.id eq $post->user->id}
            <div class="row">
                <a href="?r=post/update&id={$post->id}" class="btn btn-default" style="margin-left: 15px;">EDIT</a>
            </div>
        {/if}
    </div>
</div>
<div class="margin50"></div>