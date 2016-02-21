<?php

class Post extends ActiveRecord\Model{
    
    static $table_name = 'posts';
    
    static $belongs_to = array('user');
}