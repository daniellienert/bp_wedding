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
	 * guestDetails
	 *
	 * @var string
	 */
	protected $guestDetails = '';

	/**
	 * message
	 *
	 * @var string
	 */
	protected $message = '';


	/**
	 * @var array
	 */
	protected $guestDetailEntries;


	public function __construct() {
		$this->generateGuestDetails();
	}

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
	 * Returns the guestDetails
	 *
	 * @return string $guestDetails
	 */
	public function getGuestDetails() {
		return $this->guestDetails;
	}

	/**
	 * Sets the guestDetails
	 *
	 * @param string $guestDetails
	 * @return void
	 */
	public function setGuestDetails($guestDetails) {
		$this->guestDetails = $guestDetails;
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


	/**
	 * @return array
	 */
	public function getGuestDetailEntries() {
		return json_decode($this->guestDetails, TRUE);
	}


	/**
	 * @param array $entries
	 */
	public function setGuestDetailEntries(array $entries) {
		$this->guestDetails = json_encode($entries);
	}


	/**
	 * @param int $count
	 */
	public function generateGuestDetails($count = 6) {
		$entries = array();

		for($i = 0; $i < $count; $i++) {
			$entries[$i] = array();
		}

		$this->setGuestDetailEntries($entries);
	}
}