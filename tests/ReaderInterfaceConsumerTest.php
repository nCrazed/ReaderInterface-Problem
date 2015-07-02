<?php

use Example\ReaderInterfaceConsumer;
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

class ReaderInterfaceConsumerTest extends PHPUnit_Framework_TestCase
{
	const CSV_FILE = 'tests/test_data.csv';
	const XLSX_FILE = 'tests/test_data.xlsx';

	const EXPECTED = [
		['a1', 'b1'],
		['a2', 'b2'],
	];

	public function testCSVImplementsInterface()
	{
		$consumer = new ReaderInterfaceConsumer;
		$result = $consumer->handleFile(ReaderFactory::create(Type::CSV), self::CSV_FILE);
		$this->assertEquals(self::EXPECTED, $result);
	}

	public function testXLSXImplementsInterface()
	{
		$consumer = new ReaderInterfaceConsumer;
		$result = $consumer->handleFile(ReaderFactory::create(Type::XLSX), self::XLSX_FILE);
		$this->assertEquals(self::EXPECTED, $result);

	}

}
