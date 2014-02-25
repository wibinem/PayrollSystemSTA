<?php
//
// jQuery File Tree PHP Connector
//
// Version 1.01
//
// Cory S.N. LaViska
// A Beautiful Site (http://abeautifulsite.net/)
// 24 March 2008
//
// History:
//
// 1.01 - updated to work with foreign characters in directory/file names (12 April 2008)
// 1.00 - released (24 March 2008)
//
// Output a list of files for jQuery File Tree
//

$_POST['dir'] = urldecode($_POST['dir']);

if( file_exists($root . $_POST['dir']) ) {
	$files = scandir($root . $_POST['dir']);
	natcasesort($files);
	if( count($files) > 2 ) { /* The 2 accounts for . and .. */
		echo "<ul class=\"jqueryFileTree\" style=\"display: none;\">";
		// All dirs
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && is_dir($root . $_POST['dir'] . $file) ) {
				echo "<li class=\"directory collapsed\">";
				echo "<a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "/\">" . htmlentities($file) . "</a>";
				echo "<span class=\"buttons\"><a href=\"#\" class=\"edit tip\" title=\"edit\">edit</a><a href=\"#\" class=\"view tip\" class=\"view\">view</a><a href=\"#\" class=\"delete tip\" title=\"delete\">delete</a></span>";
				echo "</li>";
			}
		}
		// All files
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && !is_dir($root . $_POST['dir'] . $file) ) {
				$ext = preg_replace('/^.*\./', '', $file);
				echo "<li class=\"file ext_$ext\">";
				echo "<a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "\">" . htmlentities($file) . "</a>";
				echo "<span class=\"buttons\"><a href=\"#\" class=\"edit tip\" title=\"edit\">edit</a><a href=\"#\" class=\"view tip\" class=\"view\">view</a><a href=\"#\" class=\"delete tip\" title=\"delete\">delete</a></span>";
				echo "</li>";
			}
		}
		echo "</ul>";	
	}
}

?>