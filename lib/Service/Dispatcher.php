<?php
declare(strict_types=1);
/**
 * @copyright Copyright (c) 2020 Arthur Schiwon <blizzz@arthur-schiwon.de>
 *
 * @author Arthur Schiwon <blizzz@arthur-schiwon.de>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
e *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\FlowWebhooks\Service;

use OCA\FlowWebhooks\Events\IncomingRequestEvent;
use OCP\EventDispatcher\IEventDispatcher;
use OCP\IRequest;

class Dispatcher {
	/** @var IEventDispatcher */
	protected $eventDispatcher;

	public function __construct(IEventDispatcher $eventDispatcher) {
		$this->eventDispatcher = $eventDispatcher;
	}

	public function dispatch(IRequest $request, string $urlId) {
		$this->eventDispatcher->dispatchTyped(
			new IncomingRequestEvent($request, $urlId)
		);
	}
}
