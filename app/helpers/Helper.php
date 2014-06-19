<?php 

class Helper {

    public static function clean($string) {
   	 $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
		 return strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $string)); // Removes special chars.
		}
}