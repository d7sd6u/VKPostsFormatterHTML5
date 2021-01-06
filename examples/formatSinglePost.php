<?php

require "examplePost.php";
require dirname(__DIR__) . "/vendor/autoload.php";

use d7sd6u\VKPostsFormatterHTML5\Formatter;

$options = array(

);

$formatter = new Formatter($options);

$formatter->setPost($post);

$content = $formatter->formatContent();
$comments = $formatter->formatComments();

echo $content . $comments;