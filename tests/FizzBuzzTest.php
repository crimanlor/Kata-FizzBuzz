<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\Fizzbuzz;



class FizzBuzzTest extends TestCase {

	public function test_returns_Fizz_if_is_3_multiple(
	) {
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->transform(3);

		$this->assertEquals("Fizz", $result);
	}

	public function test_returns_Buzz_if_is_5_multiple(
	) {
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->transform(5);

		$this->assertEquals("Buzz", $result);
	}
	
	public function test_returns_FizzBuzz_if_is_5_and_3_multiple(
	) {
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->transform(15);

		$this->assertEquals("FizzBuzz", $result);
	}
}


