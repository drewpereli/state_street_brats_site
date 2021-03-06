<?php
/*	MythicCMS v0.1, created by Corey Caswick
 *	Copyright � 2009-2010 Mythic Web Design <http://www.mythicwebdesign.com/>
 */

// Directories
define('_ROOTDIR', '/');
define('_PHP_ROOTDIR', '/home/content/S/a/u/Sausageman/html/');
define('_IMGDIR', 'images/');
define('_SCRIPTDIR', 'scripts/');
define('_THEMEDIR', 'themes/');
define('_USERDIR', 'uploads/');

// Site Info
define('_SITE_TITLE', 'State Street Brats');
define('_SITE_EMAIL', 'statestreetbrats@yahoo.com');
define('_SITE_KEYWORDS', 'madison, wisconsin, sports bar, brats, state street');
define('_SITE_DESC', 'State Street Brats - Madison\'s Original State Street Sports Bar. Home of the Red Brat.');
define('_SITE_AUTHOR', ' Mythic Web Design - http://www.mythicwebdesign.com/ ');
define('_SITE_THEME', 'default/');	// Load CSS, images, etc. from themes/_SITE_THEME
define('_SITE_HEADERS', '
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="/scripts/jquery-ui.js"></script>
	<script type="text/javascript" src="/scripts/jquery.aslideshow/jquery.aslideshow.pack.js"></script>
	<script type="text/javascript" src="/scripts/QapTcha.jquery.js"></script>
	<link rel="stylesheet" href="/scripts/jquery.aslideshow/styles.css" media="screen" type="text/css" />
	<link rel="alternate" type="application/rss+xml" title="State Street Brats News" href="http://feeds.feedburner.com/StateStreetBrats" />
	<script type="text/javascript" src="/scripts/autorun.js"></script>
');
define('_SITE_TITLE_SEP', ' - ');

// CMS Login
define('_ADMIN_USER', 'statestreetbrats');
define('_ADMIN_PASS', 'redbrat1');

// DB Info
define('_DB_SERVER', 'ssbcmsdb.db.2352866.hostedresource.com');
define('_DB_USER', 'ssbcmsdb');
define('_DB_PASS', 'Pp7bbV9N+qtt#p');
define('_DB_NAME', 'ssbcmsdb');

// Miscellaneous
define('_DATE_FORMAT', 'g:i A, F jS, Y');
define('_DATE_FORMAT_SHORT', 'm/d/Y');

?>