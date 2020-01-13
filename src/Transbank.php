<?php

declare(strict_types=1);

/*
 * This file is part of the BetterTransbank\Certificates project.
 * (c) Matías Navarro-Carter <mnavarrocarter@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BetterTransbank\Certificates;

/**
 * Class Transbank.
 */
final class Transbank
{
    use ConstantTrait;

    public const PRODUCTION = CERTS_DIR.'/transbank/production.pem';
    public const STAGING = CERTS_DIR.'/transbank/staging.pem';
}
