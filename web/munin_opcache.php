<?php
/**
 * Part of Munin PHP OPcache plugin - Refer to opcache_stats for installation instructions.
*/

header('Content-Type: text/plain');
if(function_exists('opcache_get_status')) {
	$data = opcache_get_status(false);
	print json_encode($data);
} else {
	print json_encode(array());
}