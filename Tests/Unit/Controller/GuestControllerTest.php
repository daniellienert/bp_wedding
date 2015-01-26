<?php
namespace DL\BpWedding\Tests\Unit\Controller;
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
 * Test case for class DL\BpWedding\Controller\GuestController.
 *
 * @author Daniel Lienert <typo3@lienert.cc>
 */
class GuestControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DL\BpWedding\Controller\GuestController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DL\\BpWedding\\Controller\\GuestController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllGuestsFromRepositoryAndAssignsThemToView() {

		$allGuests = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$guestRepository = $this->getMock('DL\\BpWedding\\Domain\\Repository\\GuestRepository', array('findAll'), array(), '', FALSE);
		$guestRepository->expects($this->once())->method('findAll')->will($this->returnValue($allGuests));
		$this->inject($this->subject, 'guestRepository', $guestRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('guests', $allGuests);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenGuestToView() {
		$guest = new \DL\BpWedding\Domain\Model\Guest();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newGuest', $guest);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($guest);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenGuestToGuestRepository() {
		$guest = new \DL\BpWedding\Domain\Model\Guest();

		$guestRepository = $this->getMock('DL\\BpWedding\\Domain\\Repository\\GuestRepository', array('add'), array(), '', FALSE);
		$guestRepository->expects($this->once())->method('add')->with($guest);
		$this->inject($this->subject, 'guestRepository', $guestRepository);

		$this->subject->createAction($guest);
	}
}
