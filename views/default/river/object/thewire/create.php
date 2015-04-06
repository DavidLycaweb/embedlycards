<?php
/**
 * File river view.
 */

$object = $vars['item']->getObjectEntity();
$objeto = $object->guid;
$excerpt = strip_tags($object->description);
$excerpt = thewire_filter($excerpt);

$uvoo = parse_urls($excerpt);
$uvo =  strip_tags($uvoo);
$excerpt .= "<div class='elwire-$objeto'>
<a class='embedly-card' href='$uvo'></a>
</div>";

$subject = $vars['item']->getSubjectEntity();
$subject_link = elgg_view('output/url', array(
	'href' => $subject->getURL(),
	'text' => $subject->name,
	'class' => 'elgg-river-subject',
	'is_trusted' => true,
));

$object_link = elgg_view('output/url', array(
	'href' => "thewire/owner/$subject->username",
	'text' => elgg_echo('thewire:wire'),
	'class' => 'elgg-river-object',
	'is_trusted' => true,
));

$summary = elgg_echo("river:create:object:thewire", array($subject_link, $object_link));


echo elgg_view('river/elements/layout', array(
	'item' => $vars['item'],
	'message' => $excerpt,
	'summary' => $summary,
));
