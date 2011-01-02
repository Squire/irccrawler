<?php
// To add servers, create a file named 'servers' in the working directory,
// (Usually '~/crawl/servers') and separate the servers with a new line.

//Initial directory to place crawl data: (Please include a backslash at the end)
$initialDir = "/home/nodex/public_html/crawldata/";

// You should know what to do here... >_>
$ident = 'Crawler'.rand(100,999);;
$realname = 'Crawler';
$nickname = 'Crawler'.rand(100,999);
$quitmsg = 'Crawler! - I crawl ur irc netz!';

// End configuration. Do not edit below this line.
require("./main.php");
?>
