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
 * Trait ConstantTrait.
 */
trait ConstantTrait
{
    private function __construct()
    {
        // Empty on purpose. Cannot be instantiated.
    }

    private function __clone()
    {
        // Empty on purpose. Cannot be cloned.
    }
}
