<?php

class Tag extends Model {
	
	protected $_hasAndBelongsToMany = array('posts');
	
}