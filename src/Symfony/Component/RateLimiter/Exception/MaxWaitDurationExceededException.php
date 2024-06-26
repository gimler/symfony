<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\RateLimiter\Exception;

use Symfony\Component\RateLimiter\RateLimit;

/**
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
class MaxWaitDurationExceededException extends \RuntimeException
{
    public function __construct(
        string $message,
        private RateLimit $rateLimit,
        int $code = 0,
        ?\Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getRateLimit(): RateLimit
    {
        return $this->rateLimit;
    }
}
