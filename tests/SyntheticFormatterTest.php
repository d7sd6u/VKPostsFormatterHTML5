<?php
use PHPUnit\Framework\TestCase;

use d7sd6u\VKPostsFormatterHTML5\Formatter;

final class SyntheticFormatterTest extends TestCase
{
	protected function setUp(): void {
		date_default_timezone_set('UTC');
	}

	/**
	 * @dataProvider pregeneratedContentHtml
	 */
	public function testFormatContentStillWorksOnPregeneratedData($post, $pregeneratedHtml): void {
		$formatter = new Formatter();
		$formatter->setPost($post);
		$html = $formatter->formatContent();

		$this->assertEquals($html, $pregeneratedHtml);
	}

	/**
	 * @dataProvider pregeneratedCommentsHtml
	 */
	public function testFormatCommentsStillWorksOnPregeneratedData($post, $pregeneratedHtml): void {
		$formatter = new Formatter();
		$formatter->setPost($post);
		$html = $formatter->formatComments();

		$this->assertEquals($html, $pregeneratedHtml);
	}

	public function pregeneratedContentHtml() {
		$pairs = array();

		$htmlPaths = glob('tests/data/content/*');
		foreach($htmlPaths as $htmlPath) {
			$html = file_get_contents($htmlPath);

			$pathAsArray = explode('/', $htmlPath);
			$postId = array_pop($pathAsArray);

			$postPath = __DIR__ . '/data/posts/' . $postId;
			$postInJson = file_get_contents($postPath);
			$post = json_decode($postInJson, true);

			$pairs[] = array($post, $html);
		}

		return $pairs;
	}

	public function pregeneratedCommentsHtml() {
		$pairs = array();

		$htmlPaths = glob('tests/data/comments/*');
		foreach($htmlPaths as $htmlPath) {
			$html = file_get_contents($htmlPath);

			$pathAsArray = explode('/', $htmlPath);
			$postId = array_pop($pathAsArray);

			$postPath = __DIR__ . '/data/posts/' . $postId;
			$postInJson = file_get_contents($postPath);
			$post = json_decode($postInJson, true);

			$pairs[] = array($post, $html);
		}

		return $pairs;
	}
}