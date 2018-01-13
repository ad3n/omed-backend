<?php

declare(strict_types=1);

/*
 * This file is part of the Demo project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Demo\Entity;

use Doctrine\Common\Collections\Collection;

interface AdressableInterface
{
    /**
     * @param Address $address
     *
     * @return $this
     */
    public function setAddresses(Collection $address);

    /**
     * @return Address
     */
    public function getAddresses();

    /**
     * @param Address $address
     *
     * @return $this
     */
    public function addAddress(Address $address);
}