<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('theme')) {
	function theme()
	{
		$link = base_url() . 'assets/';
		return $link;
	}
}

if (!function_exists('title')) {
	function title()
	{
		return $value = 'E-Learning SMAN 2 Lubuk Alung';
	}
}

if (!function_exists('user')) {
	function user()
	{
		return $value = 'Alexander Pierce';
	}
}

if (!function_exists('role')) {
	function role()
	{
		return $value = 'Web Developer';
	}
}

if (!function_exists('foto')) {
	function foto()
	{
		return $value = base_url() . 'assets/dist/img/user2-160x160.jpg';
	}
}

if (!function_exists('bergabung')) {
	function bergabung()
	{
		return $value = 'Member since Nov. 2012';
	}
}
