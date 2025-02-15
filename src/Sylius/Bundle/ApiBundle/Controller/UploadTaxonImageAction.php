<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\ApiBundle\Controller;

use Sylius\Bundle\ApiBundle\Creator\TaxonImageCreatorInterface;
use Sylius\Component\Core\Model\TaxonImageInterface;
use Symfony\Component\HttpFoundation\Request;

/** @experimental */
final class UploadTaxonImageAction
{
    public function __construct(private TaxonImageCreatorInterface $taxonImageCreator)
    {
    }

    public function __invoke(Request $request): TaxonImageInterface
    {
        return $this->taxonImageCreator->create(
            $request->attributes->get('code', ''),
            $request->files->get('file'),
            $request->request->get('type'),
        );
    }
}
