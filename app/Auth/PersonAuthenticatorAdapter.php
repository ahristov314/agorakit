<?php

namespace App\Auth;

use App\User;
use Furdarius\OIDConnect\Contract\Authenticator;
use Furdarius\OIDConnect\Exception\AuthenticationException;
use Lcobucci\JWT\Token\DataSet;

class PersonAuthenticatorAdapter implements Authenticator
{
    /**
     * @param DataSet $claims
     *
     * @return void
     */
    public function authUser(DataSet $claims)
    {
        $email = $claims->get('email');
        if (!$email) {
            throw new AuthenticationException('User\'s email not present in token');
        }

        $model = new User(['email' => $email]);

        \Auth::setUser($model);
    }
}