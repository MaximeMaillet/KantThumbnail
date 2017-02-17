<?php

namespace M2Max\KantThumbnail;

use \M2Max\CSSManager\IKant;

class KantThumbnail implements IKant
{
	public static function generate() {
		return file_get_contents(__DIR__.'/example.html');
	}

	public function get() {
		return [__DIR__.'/index.css'];
	}
}
