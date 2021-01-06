<?php

require "exampleRepost.php";
require "exampleComments.php";

$post = array(
	'id' => '-10223270_4446',
	'author' => 'Alice',
	'source' => 'Lacus Laoreet',
	'origin' => array(
		'name' => 'Adipiscing elit',
		'link' => 'https://example.com/#origin-link'
	),
	'timestamp' => '946684800',
	'tags' => array(
		'tag1',
		'tag2',
		'tag3',
		'anothertag'
	),
	'text' => array(
		'plaintext' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id neque aliquam vestibulum morbi blandit cursus risus at ultrices. Velit euismod in pellentesque massa placerat duis ultricies.',
		'html' => '<a href="https://example.com/">Lorem ipsum</a> dolor sit amet, consectetur😂 adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id neque aliquam vestibulum morbi blandit cursus risus at ultrices. Velit euismod in pellentesque massa placerat duis ultricies.',
		'emojis' => '<a href="https://example.com/">Lorem ipsum</a> dolor sit amet, consectetur<img class="emoji" src="/emoji/e/f09f9882.png" alt="😂"> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id neque aliquam vestibulum morbi blandit cursus risus at ultrices. Velit euismod in pellentesque massa placerat duis ultricies.'
	),
	'images' => array(
		array(
			'thumb' => 'https://via.placeholder.com/400x300?text=400%20x%20300',
			'original' => 'https://via.placeholder.com/800x600?text=800%20x%20600'
		),
		array(
			'thumb' => 'https://via.placeholder.com/500x300?text=ImageThumbnail',
			'original' => 'https://via.placeholder.com/1000x600?text=Image'
		),
	),
	'videos' => array(
		array(
			'id' => '32706235_2115701',
			'nativeUrl' => 'https://commons.wikimedia.org/wiki/File:Wikipedia_Edit_2014.webm',
			'title' => 'Wikipedia Edit 2014',
			'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Wikipedia_Edit_2014.webm/800px--Wikipedia_Edit_2014.webm.jpg',
			'urls' => array(
				'https://upload.wikimedia.org/wikipedia/commons/transcoded/4/4d/Wikipedia_Edit_2014.webm/Wikipedia_Edit_2014.webm.480p.vp9.webm',
				'https://upload.wikimedia.org/wikipedia/commons/4/4d/Wikipedia_Edit_2014.webm'
			)
		),
		array(
			'id' => '321924785_1242570',
			'nativeUrl' => 'https://www.youtube.com/watch?v=-o2o91UIjPk',
			'title' => 'River of Life',
			'image' => 'https://i.ytimg.com/vi/-o2o91UIjPk/hq720.jpg',
			'iframe' => 'https://www.youtube.com/embed/-o2o91UIjPk'
		)
	),
	'audios' => array(
		array(
			'title' => 'White noise',
			'nativeUrl' => 'https://commons.wikimedia.org/wiki/File:White_noise.ogg',
			'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/aa/White_noise.ogg',
			'duration' => 10
		),
		array(
			'title' => 'Brown noise',
			'nativeUrl' => 'https://commons.wikimedia.org/wiki/File:Brownnoise.ogg',
			'url' => 'https://upload.wikimedia.org/wikipedia/commons/c/c9/Brownnoise.ogg',
			'duration' => 10
		)
	),
	'files' => array(
		array(
			'title' => 'Commons-File-Rename-log.pdf',
			'nativeUrl' => 'https://commons.wikimedia.org/wiki/File:Commons-File-Rename-log.pdf',
			'id' => '40097744_49810130',
			'url' => 'https://upload.wikimedia.org/wikipedia/commons/1/12/Commons-File-Rename-log.pdf'
		),
		array(
			'title' => 'Presentation',
			'nativeUrl' => 'https://commons.wikimedia.org/wiki/File:GLAM_Wikimedia_Canada_-_Presentation_file.pdf',
			'id' => '49810130_40097744',
			'url' => 'https://upload.wikimedia.org/wikipedia/commons/b/b1/GLAM_Wikimedia_Canada_-_Presentation_file.pdf'
		),
	),
	'map' => array(
		'text' => 'The Queen\'s Walk, London',
		'image' => 'https://static-maps.yandex.ru/1.x/?ll=-0.11930945188116,51.503387341634&size=400,400&z=14&lang=en_US&l=pmap&pt=-0.11930945188116,51.503387341634,vkbkm',
		'url' => 'https://maps.google.com/?q=51.503387341634%2C-0.11930945188116&z=12'
	),
	'pool' => array(
		'title' => 'Incididunt ut labore',
		'author' => 'Alice',
		'type' => 'some nonsence',
		'options' => array(
			'ultricies',
			'duis',
			'placerat'
		),
		'total' => 5
	),
	'poster' => array(
		'text' => 'Vestibulum morbi blandit cursus',
		'image' => 'https://via.placeholder.com/600x600?text=Poster'
	),
	'article' => array(
		'title' => 'Vestibulum morbi',
		'author' => 'Bob',
		'url' => 'https://example.com/#article',
		'image' => 'https://via.placeholder.com/600x500?text=ArticleBackground'
	),
	'expandedLink' => array(
		'title' => 'Example.com, suspendisse ultrices gravida dictum.',
		'url' => 'https://example.com',
		'image' => 'https://via.placeholder.com/600x500?text=LinkPreviewImage'
	),
	'url' => 'https://example.com/#vk-post-url',
	'comments' => $comments,
	'repost' => $repost
);

?>