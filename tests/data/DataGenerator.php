<?php

define('ROOTDIR', dirname(dirname(__DIR__)));

require_once ROOTDIR . '/vendor/autoload.php';

use d7sd6u\VKPostsFormatterHTML5\Formatter;

date_default_timezone_set('UTC');

$options = array();

$formatter = new Formatter($options);

$postPaths = glob('tests/data/posts/*');
foreach($postPaths as $postPath) {
	$postInJson = file_get_contents($postPath);
	$post = json_decode($postInJson, true);

	$formatter->setPost($post);

	try {
		$content = $formatter->formatContent();
		$comments = $formatter->formatComments();
	} catch(\Exception $e) {
		die('Formatting gone horribly wrong: ' . $e->getMessage() . "\n");
	}

	file_put_contents(__DIR__ . "/content/$post[id]", $content);
	file_put_contents(__DIR__ . "/comments/$post[id]", $comments);

	echo "Formatted $post[id] post\n";
}

echo "Formatted all posts\n";

