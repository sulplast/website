<?php

function locale_request_is($url, $suffix = '*')
{
	return request()->is(app()->getLocale() . '/' . __('routes.' . $url) . $suffix);
}

function url_locale($url)
{
	return url(app()->getLocale() . '/' . __('routes.' . $url));
}

function asset_locale($asset)
{
	return asset(strtolower(str_replace('_', '-', app()->getLocale())) . $asset);
}