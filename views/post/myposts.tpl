<div class="row">
    <div class="container">
        <h1 class="text-center">Blog</h1>
        <div class="col-md-8">
            {foreach from=$posts item=$post}
                <div class="article blog">
                    <div class="blog-head"></div>
                    <div class="col-md-6 reset">
                        <div class="blog-thumbnail">
                            <a href="?r=post/view&id={$post->id}"><img class="img-responsive" src="assets/img/post/{$post->picture}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="?r=post/view&id={$post->id}"><h2>{$post->title}<br><small>{$post->updated_at} author {$post->user->username}</small></h2></a>
                        <p>{$post->description|truncate:200:"..."}</p>
                        <div class="row" style="padding-left: 15px;">
                            <a href="?r=post/update&id={$post->id}" class="btn btn-default">EDIT</a>&nbsp;<a post-data="{$post->id}" id="sure" class="btn btn-default" onclick="sure()">DELETE</a>
                        </div>
                    </div>
                </div>
            {/foreach}
            <div class="row">
                <div class="col-md-4 col-md-offset-4"><button class="btn btn-default" id="load-button">Load More</button></div>
            </div>
        </div>
        <div class="col-md-4" style="padding-top: 30px;">
            <img src="assets/img/crescendo-banner.jpg" class="img-responsive">
        </div>
    </div>
</div>
<div class="margin50"></div>