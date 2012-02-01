<?php

class Post extends Model {
	
	protected $_belongsTo = array('users');
	protected $_hasAndBelongsToMany = array('tags');
}