<?php

namespace App\Auth;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\GuardHelpers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Traits\Macroable;

class StatelessGuard implements Guard
{
    use GuardHelpers, Macroable;

    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable
     * @throws AuthenticationException
     */
    public function user()
    {
        if (null === $this->user) {
            throw new AuthenticationException('Unauthenticated user');
        }

        return $this->user;
    }

    /**
     * @param array $credentials
     * @return bool
     */
    public function validate(array $credentials = [])
    {
        return $this->user instanceof Authenticatable;
    }
}