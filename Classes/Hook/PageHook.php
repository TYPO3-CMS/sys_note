<?php
namespace TYPO3\CMS\SysNote\Hook;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Hook for the page module
 *
 * @author Georg Ringer <typo3@ringerge.org>
 * @author Kai Vogel <kai.vogel@speedprogs.de>
 */
class PageHook {

	/**
	 * Add sys_notes as additional content to the footer of the page module
	 *
	 * @param array $params
	 * @param \TYPO3\CMS\Backend\Controller\PageLayoutController $parentObject
	 * @return string
	 */
	public function render(array $params = array(), \TYPO3\CMS\Backend\Controller\PageLayoutController $parentObject) {
		/** @var $noteBootstrap \TYPO3\CMS\SysNote\Core\Bootstrap */
		$noteBootstrap = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\SysNote\\Core\\Bootstrap');
		return $noteBootstrap->run('Note', 'list', array('pids' => $parentObject->id));
	}

}
