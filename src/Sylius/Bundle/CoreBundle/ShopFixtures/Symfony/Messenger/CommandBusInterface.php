<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\CoreBundle\ShopFixtures\Symfony\Messenger;

use Sylius\Bundle\CoreBundle\ShopFixtures\Command\CommandInterface;

interface CommandBusInterface
{
    public function dispatch(CommandInterface $command): mixed;
}
