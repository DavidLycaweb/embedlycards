<?php
/**
 * New bookmarks river entry
 *
 * @package Bookmarks
 */

$object = $vars['item']->getObjectEntity();
$objeto = $object->guid;
$uvo = $object->address;
$excerpt = elgg_get_excerpt($object->description);
$excerpt .= "<div class='book-$objeto'>
<a class='embedly-card' data-card-type='article' href='$uvo'></a>
</div>";


echo elgg_view('river/elements/layout', array(
	'item' => $vars['item'],
	'message' => $excerpt,
	'attachments' => elgg_view('output/url', array('value' => $object->address)),
));


