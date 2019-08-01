<?php
/**
 * The showFile.php
 * 
 * @package tail_examples
 * @author Bastian Gorke <b.gorke@ipunkt.biz>
 * @version 14.12.2005
 * $Id$
 */
 
require_once("class.tail.php");

$tailfile = isset($_REQUEST['file'])?urldecode($_REQUEST['file']):"/var/log/barman/barman.log";

$mytail = new tail($tailfile);


if (isset($_REQUEST['grep'])) {
	$mytail->setGrep($_REQUEST['grep']);
}

if (isset($_REQUEST['show']) && is_numeric($_REQUEST['show'])){
	$mytail->setNumberOfLines($_REQUEST['show']);
}

echo $mytail->output(HIGHLIGHT_BOLD+BREAKS);
?>
