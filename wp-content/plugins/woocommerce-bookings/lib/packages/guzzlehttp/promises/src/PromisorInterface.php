<?php
/**
 * @license MIT
 *
 * Modified by woocommerce on 10-June-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Automattic\WooCommerce\Bookings\Vendor\GuzzleHttp\Promise;

/**
 * Interface used with classes that return a promise.
 */
interface PromisorInterface
{
    /**
     * Returns a promise.
     */
    public function promise(): PromiseInterface;
}
