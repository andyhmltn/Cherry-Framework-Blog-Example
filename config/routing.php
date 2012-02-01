<?php

/**
 * Define your custom routing rules here using REGEX.
 * On the left is the URL you'd like to redirect
 * On the right is the URL you'd like to redirect to 
 *
 * @package Routing class
 * 
 **/

$routes = array(
	/**
	 * Posts controller admin routing
	 */
	'/admin\/posts\/add\/?/' => 'posts/add',				#The below wouldn't work with one URL arg.
	'/admin\/posts\/(.*?)\/?(.*?)\/?/' => 'posts/\1/\2',	#Basically all of the post actions.
	/**
	 * Admin pages
	 */
	'/admin\/login\/?/' => 'users/login',					#Allows them to login
	'/admin\/add\/?/' => 'users/register',					#Allows them to add a new admin
	'/admin\/logout\/?/' => 'users/logout',					#Just a logout page
	/**
	 * General posts controller routing.
	 */
	'/view\/(.*?)\/?/' => 'posts/view/\1',					#Removes the need to add 'Posts/view'
	'/tags\/add\/?/' => 'tags/add',
	'/tags\/(.*?)\/?/' => 'tags/view/\1',					#Removes the 'view' action for the tags
	
);