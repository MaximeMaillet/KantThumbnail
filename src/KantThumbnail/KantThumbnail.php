<?php

namespace M2Max\KantThumbnail;

use \M2Max\CSSManager\IKant;

class KantThumbnail implements IKant
{
	public function get() {
		return [__DIR__.'/index.css'];
	}
}
