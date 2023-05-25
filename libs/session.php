<?php 
/**
 * 
 */
class Session 
{
	public static function init()
	{
		@session_start();
	}

	public static function set(string $key, array $value)
	{
		$_SESSION[$key] = $value;
	}
	public static function setKey(string $key,int $keys, array $value)
	{
		$_SESSION[$key][$keys] = $value;
	}
	public static function get(string $key)
	{
		if (isset($_SESSION[$key]))
		return $_SESSION[$key];
		else return null;
	}

	public static function destroy()
	{	
		// unset($_SESSION);
		session_destroy();
	}
}