<?php
namespace DL\BpWedding\Controller;
use DL\BpWedding\Domain\Model\Guest;

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
	 * @var \TYPO3\CMS\Core\Mail\MailMessage
	 * @inject
	 */
	protected $mailer;

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
	 * @param Guest $newGuest
	 * @ignorevalidation $newGuest
	 * @return void
	 */
	public function newAction(Guest $newGuest = NULL) {
		if($newGuest === NULL) $newGuest = new Guest();

		$this->view->assign('newGuest', $newGuest);
	}

	/**
	 * action create
	 *
	 * @param Guest $newGuest
	 * @return void
	 */
	public function createAction(Guest $newGuest) {
		$this->guestRepository->add($newGuest);

		$this->sendMail($newGuest);

		$this->redirect('thankYou');
	}



	public function thankYouAction() {
	}


	/**
	 * @param Guest $newGuest
	 */
	protected function sendMail(Guest $newGuest) {
		$view = $this->objectManager->get('TYPO3\CMS\Fluid\View\StandaloneView'); /** @var \TYPO3\CMS\Fluid\View\StandaloneView $view */
		$view->setTemplatePathAndFilename(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('bp_wedding') . '/Resources/Private/Templates/Mail/NewGuest.html');
		$view->assign('guest', $newGuest);

		 $this->mailer
			->setSubject($newGuest->getName() . ' hat sich zur Hochzeit angemeldet.')
			->setFrom(array('mail@bsys.net' => 'Hochzeits Homepage'))
			->setTo(array('mail@lienert.cc'))
			->setBody('Neue Anmeldung.')
			->addPart($view->render(), 'text/html')
			->send();
	}
}