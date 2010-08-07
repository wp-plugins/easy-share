<?php
/*
Plugin Name: Easy Share
Plugin URI: http://mr.hokya.com/easy-share
Description: Display snippet code of your URL that ready to be pasted on IM, WebSites, Forum, or Email by your visitors. This will help you promote your site by letting your visitor share your URL easily to their relation. The snippet code will be shown on every of your posts.
Version: 2.53
Author: Julian Widya Perdana
Author URI: http://mr.hokya.com/
*/

function easy_share () {
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$title = get_the_title();
	$content = "<table class='easy_share'>";
	$content .= "<tr><td colspan=2>Copy and Paste the code below</td></tr>";
	$content .= "<tr><td>Email and IM</td><td><input value='$url' size=50/></td></tr>";
	$content .= "<tr><td>Websites</td><td><input value='&lt;a href=&quot;$url&quot;&gt;$title&lt;/a&gt;' size=50/></td></tr>";
	$content .= "<tr><td>Forums</td><td><input value='[url=".$url."]".$title."[/url]' size=50/></td></tr>";
	$content .= "</table>";
	echo $content;
	echo '<style>.easy_share{-moz-box-shadow:0 0 15px; margin:10px;} .easy_share td{padding:5px}</style>';
	echo '<div align="right"><small><a href="http://mr.hokya.com/easy-share/">Get This</a></small></div>';
}

add_action('comments_template', 'easy_share');

?>