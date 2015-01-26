<?php
namespace DL\BpWedding\Controller;


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
 * GuestController
 */
class GuestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * guestRepository
	 *
	 * @var \DL\BpWedding\Domain\Repository\GuestRepository
	 * @inject
	 */
	protected $guestRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$guests = $this->guestRepository->findAll();
		$this->view->assign('guests', $guests);
	}

	/**
	 * action new
	 *
	 * @param \DL\BpWedding\Domain\Model\Guest $newGuest
	 * @ignorevalidation $newGuest
	 * @return void
	 */
	public function newAction(\DL\BpWedding\Domain\Model\Guest $newGuest = NULL) {
		$this->view->assign('newGuest', $newGuest);
	}

	/**
	 * action create
	 *
	 * @param \DL\BpWedding\Domain\Model\Guest $newGuest
	 * @return void
	 */
	public function createAction(\DL\BpWedding\Domain\Model\Guest $newGuest) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->guestRepository->add($newGuest);
		$this->redirect('list');
	}

}