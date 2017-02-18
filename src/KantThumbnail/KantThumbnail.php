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

		if(self::$instance === null && count($data) == 0) {
			echo $example;
			return;
		}

		self::Kanter();

		if(count($data) > 0) {
			$array_data = $data;
		}
		else {
			$array_data = self::$instance->data();
		}

		foreach($array_data as $key => $value) {
			$example = str_replace('{'.strtoupper($key).'}', $value, $example);
		}

		echo $example;
	}

	public function css() {
		return [__DIR__.'/index.css'];
	}

	public function js() {
		return [];
	}

	public function media()
	{
		// TODO: Implement media() method.
	}
}
