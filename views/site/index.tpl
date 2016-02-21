    <div class="banner">
    <ul>
        <li style="background-image: url('assets/img/crescendo.jpg');"></li>
        <li style="background-image: url('assets/img/crescendo-banner.jpg');"></li>
    </ul>
</div>
    <div class="container">
    <div class="arrow"></div>
    </div>
    <div class="container carousel">
        <h2>Latest Posts</h2>
      <div class="row">
          {foreach from=$posts item=$post}
          <a href="?r=post/view&id={$post->id}">
        <div class="col-md-3 car-item">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="assets/img/post/{$post->picture}" alt="Carousel Img">
          </div>
          <div class="carousel-avatar">
              <img src="assets/img/user/{$post->user->picture}" alt="Carousel Img">
          </div>
          <div class="carousel-content">
            <h3>{$post->title}</h3>
            <p>{$post->description|truncate:60:"..."}</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>
          </a>
          {/foreach}

        
      </div>
    </div>
    <div class="row margin50"></div>
    <div class="text-inter">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Activerecord Pattern</h3>
          <p>php-activerecord is an open source ORM library based on the ActiveRecord pattern. It aims to massively simplify the interactions with your database and eliminate the chore of hand written SQL for common operations. Unlike other ORMs, you do not need to use any code generators nor maintain mapping files for your tables. This library was inspired by Ruby on Rails' implementation and therefore borrows many of its conventions and ideas.</p>
          <div class="divider"></div>
        
        </div>
        <div class="col-md-6">
          <h3>Smarty Template Engine</h3>
          <p>Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic. This implies that PHP code is application logic, and is separated from the presentation.</p>
        </div>  
      </div>
    </div>
    </div>
   
  