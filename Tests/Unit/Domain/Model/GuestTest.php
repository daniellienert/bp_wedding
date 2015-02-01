<?php

namespace DL\BpWedding\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Daniel Lienert <typo3@lienert.cc>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \DL\BpWedding\Domain\Model\Guest.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Daniel Lienert <typo3@lienert.cc>
 */
class GuestTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \DL\BpWedding\Domain\Model\Guest
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \DL\BpWedding\Domain\Model\Guest();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() {
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForStringSetsPhone() {
		$this->subject->setPhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPersonCountReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getPersonCount()
		);
	}

	/**
	 * @test
	 */
	public function setPersonCountForIntegerSetsPersonCount() {
		$this->subject->setPersonCount(12);

		$this->assertAttributeEquals(
			12,
			'personCount',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPersonNamesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPersonNames()
		);
	}

	/**
	 * @test
	 */
	public function setPersonNamesForStringSetsPersonNames() {
		$this->subject->setPersonNames('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'personNames',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMeal1ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getMeal1()
		);
	}

	/**
	 * @test
	 */
	public function setMeal1ForIntegerSetsMeal1() {
		$this->subject->setMeal1(12);

		$this->assertAttributeEquals(
			12,
			'meal1',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMeal2ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getMeal2()
		);
	}

	/**
	 * @test
	 */
	public function setMeal2ForIntegerSetsMeal2() {
		$this->subject->setMeal2(12);

		$this->assertAttributeEquals(
			12,
			'meal2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMeal3ReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getMeal3()
		);
	}

	/**
	 * @test
	 */
	public function setMeal3ForIntegerSetsMeal3() {
		$this->subject->setMeal3(12);

		$this->assertAttributeEquals(
			12,
			'meal3',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMessageReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMessage()
		);
	}

	/**
	 * @test
	 */
	public function setMessageForStringSetsMessage() {
		$this->subject->setMessage('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'message',
			$this->subject
		);
	}
}
