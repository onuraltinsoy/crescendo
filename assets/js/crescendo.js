$(document).ready(function(){
    var allBlogs = $('.blog').size();
    var from = 0;
    var to = 5;
    $('.blog').hide();
    for(var i=from; i<to; i++){
        $('.blog:eq(' + i + ')').show();
    }
    $('#load-button').click(function(){
         to = to + 5;
        for(var i=from; i<to; i++){
            $('.blog:eq(' + i + ')').fadeIn(300);
        }
    });
    $('a#sure').click(function(){
        if(confirm('Are you delete this post?')){
            location.href = '?r=post/delete&id=' + $(this).attr('post-data');
        } 
    });
});