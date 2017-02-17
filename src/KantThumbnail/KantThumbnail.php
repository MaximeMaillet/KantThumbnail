<?php

namespace M2Max\KantThumbnail;

use \M2Max\CSSManager\IKant;

class KantThumbnail extends IKant
{
	protected $data = [
		'title' => 'Name',
		'subtitle' => 'Job',
		'mini_describe' => 'Little describe',
		'describe' => 'Describe',
		'picture' => 'profil.jpg',
		'footer' => '<a href="">Twitter</a><a href="">LinkedIn</a><a href="">Facebook</a>'
	];

	public static function Kanter() {
		if(self::$instance == null)
			self::$instance = new KantThumbnail();
		return self::$instance;
	}

	public static function generate($data) {
		$example = file_get_contents(__DIR__.'/example.html');

		if(self::$instance === null)
			return $example;

		foreach(self::$instance->data() as $key => $value) {
			$example = str_replace('{'.strtoupper($key).'}', $value, $example);
		}

		return $example;
	}

	public function get() {
		return [__DIR__.'/index.css'];
	}
}
