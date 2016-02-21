<?php

class User extends ActiveRecord\Model{
    static $table_name = 'users';
    
    static $has_many = array('posts');
}