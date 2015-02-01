<?php
namespace DL\BpWedding\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Daniel Lienert <typo3@lienert.cc>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Guest
 */
class Guest extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * email
	 *
	 * @var string
	 */
	protected $email = '';

	/**
	 * phone
	 *
	 * @var string
	 */
	protected $phone = '';

	/**
	 * personCount
	 *
	 * @var integer
	 */
	protected $personCount = 0;

	/**
	 * personNames
	 *
	 * @var string
	 */
	protected $personNames = '';

	/**
	 * meal1
	 *
	 * @var integer
	 */
	protected $meal1 = 0;

	/**
	 * meal2
	 *
	 * @var integer
	 */
	protected $meal2 = 0;

	/**
	 * meal3
	 *
	 * @var integer
	 */
	protected $meal3 = 0;

	/**
	 * message
	 *
	 * @var string
	 */
	protected $message = '';

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the phone
	 *
	 * @return string $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 *
	 * @param string $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Returns the personCount
	 *
	 * @return integer $personCount
	 */
	public function getPersonCount() {
		return $this->personCount;
	}

	/**
	 * Sets the personCount
	 *
	 * @param integer $personCount
	 * @return void
	 */
	public function setPersonCount($personCount) {
		$this->personCount = $personCount;
	}

	/**
	 * Returns the personNames
	 *
	 * @return string $personNames
	 */
	public function getPersonNames() {
		return $this->personNames;
	}

	/**
	 * Sets the personNames
	 *
	 * @param string $personNames
	 * @return void
	 */
	public function setPersonNames($personNames) {
		$this->personNames = $personNames;
	}

	/**
	 * Returns the meal1
	 *
	 * @return integer $meal1
	 */
	public function getMeal1() {
		return $this->meal1;
	}

	/**
	 * Sets the meal1
	 *
	 * @param integer $meal1
	 * @return void
	 */
	public function setMeal1($meal1) {
		$this->meal1 = $meal1;
	}

	/**
	 * Returns the meal2
	 *
	 * @return integer $meal2
	 */
	public function getMeal2() {
		return $this->meal2;
	}

	/**
	 * Sets the meal2
	 *
	 * @param integer $meal2
	 * @return void
	 */
	public function setMeal2($meal2) {
		$this->meal2 = $meal2;
	}

	/**
	 * Returns the meal3
	 *
	 * @return integer $meal3
	 */
	public function getMeal3() {
		return $this->meal3;
	}

	/**
	 * Sets the meal3
	 *
	 * @param integer $meal3
	 * @return void
	 */
	public function setMeal3($meal3) {
		$this->meal3 = $meal3;
	}

	/**
	 * Returns the message
	 *
	 * @return string $message
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * Sets the message
	 *
	 * @param string $message
	 * @return void
	 */
	public function setMessage($message) {
		$this->message = $message;
	}

}