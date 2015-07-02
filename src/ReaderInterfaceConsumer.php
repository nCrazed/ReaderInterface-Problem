<?php

namespace Example;

use Box\Spout\Reader\ReaderInterface;

class ReaderInterfaceConsumer
{

	public function handleFile(ReaderInterface $reader, $path)
	{
		$reader->open($path);

		$output = [];
		while ($reader->hasNextRow()) {
			$output[] = $reader->nextRow();
		}

		$reader->close();

		return $output;
	}

}
