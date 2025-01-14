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

namespace Sylius\Component\User\Model;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

interface CredentialsHolderInterface extends PasswordAuthenticatedUserInterface
{
    public function getPlainPassword(): ?string;

    public function setPlainPassword(?string $plainPassword): void;

    public function setPassword(?string $encodedPassword): void;

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials(): void;
}
