<?php namespace App;

class Helpers {

	public static function removeUrls($url) {
		$regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@";
		return preg_replace($regex, ' ', $url);
	}

	public static function validatePhone($phone) {
		return preg_match('/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/', $phone);
	}
}