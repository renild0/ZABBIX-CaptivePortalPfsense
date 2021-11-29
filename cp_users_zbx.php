#!/usr/local/bin/php -q
<?php
	require_once("/etc/inc/util.inc");
	require_once("/etc/inc/functions.inc");
	require_once("/etc/inc/captiveportal.inc");

	/* read in captive portal db */
	/* determine number of logged in users */
	$count_cpusers = 0;
	/* Is portal activated ? */
	if (is_array($config['captiveportal']))
		/* For every zone, do */
		foreach ($config['captiveportal'] as $cpkey => $cp)
			/* Sanity check */
			if (is_array($config['captiveportal'][$cpkey])) 
				/* Is zone enabled ? */
				if (array_key_exists('enable', $config['captiveportal'][$cpkey])) {
					$cpzone = $cpkey;
					/* Zone selected -> count users and add */
					$count_cpusers += count(captiveportal_read_db());
				}

	echo $count_cpusers;
?>
