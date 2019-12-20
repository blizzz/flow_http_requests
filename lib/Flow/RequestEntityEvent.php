<?php
declare(strict_types=1);
/**
 * @copyright Copyright (c) 2019 Arthur Schiwon <blizzz@arthur-schiwon.de>
 *
 * @author Arthur Schiwon <blizzz@arthur-schiwon.de>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\FlowHttpRequests\Flow;

use OCA\FlowHttpRequests\Service\EIncomingRequest;
use OCP\IL10N;
use OCP\WorkflowEngine\IEntityEvent;

class RequestEntityEvent implements IEntityEvent {

	/** @var IL10N */
	private $l;

	public function __construct(IL10N $l) {
		$this->l = $l;
	}

	public function getDisplayName(): string {
		return $this->l->t('Web request');
	}

	public function getEventName(): string {
		return EIncomingRequest::EVENT_NAME;
	}
}