<?php

declare(strict_types=1);

/*
 * This file is part of the BetterTransbank\Certificates project.
 * (c) Matías Navarro-Carter <mnavarrocarter@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BetterTransbank\Certificates\Webpay\OneClick;

use BetterTransbank\Certificates\ConstantTrait;

/**
 * Class Mall.
 */
final class Mall
{
    use ConstantTrait;

    public const COMMERCE_CODE = '597044444429';
    public const PRIVATE = CERTS_DIR.'/webpay/oneclick/mall.key';
    public const PUBLIC = CERTS_DIR.'/webpay/oneclick/mall.crt';
}
