<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2019 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Http\RequestHandlers;

use Fisharebest\Webtrees\Services\PendingChangesService;
use Fisharebest\Webtrees\Tree;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

use function assert;
use function response;

/**
 * Show pending changes.
 */
class PendingChangesLogAction implements RequestHandlerInterface
{
    /**
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return redirect(route(PendingChangesLogPage::class, [
            'tree'     => $request->getParsedBody()['tree'],
            'from'     => $request->getParsedBody()['from'] ?? '',
            'to'       => $request->getParsedBody()['to'] ?? '',
            'type'     => $request->getParsedBody()['type'] ?? '',
            'oldged'   => $request->getParsedBody()['oldged'] ?? '',
            'newged'   => $request->getParsedBody()['newged'] ?? '',
            'xref'     => $request->getParsedBody()['xref'] ?? '',
            'username' => $request->getParsedBody()['username'] ?? '',
        ]));
    }
}