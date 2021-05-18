<?php

declare(strict_types=1);

namespace Tleckie\Validator\Validators;

use function preg_match;

/**
 * Class UriValidator
 *
 * @package  Tleckie\Validator\Validators
 * @category UriValidator
 * @author   Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class UriValidator implements ValidatorInterface
{
    protected string $regex = '/^(https?):\/\/'.               // protocol
    '(([a-z0-9$_\.\+!\*\'\(\),;\?&=-]|%[0-9a-f]{2})+'.         // username
    '(:([a-z0-9$_\.\+!\*\'\(\),;\?&=-]|%[0-9a-f]{2})+)?'.      // password
    '@)?(?#'.                                                  // auth requires @
    ')((([a-z0-9]\.|[a-z0-9][a-z0-9-]*[a-z0-9]\.)*'.           // domain segments AND
    '[a-z][a-z0-9-]*[a-z0-9]'.                                 // top level domain  OR
    '|((\d|[1-9]\d|1\d{2}|2[0-4][0-9]|25[0-5])\.){3}'.
    '(\d|[1-9]\d|1\d{2}|2[0-4][0-9]|25[0-5])'.                 // IP address
    ')(:\d+)?'.                                                // port
    ')(((\/+([a-z0-9$_\.\+!\*\'\(\),;:@&=-]|%[0-9a-f]{2})*)*'. // path
    '(\?([a-z0-9$_\.\+!\*\'\(\),;:@&=-]|%[0-9a-f]{2})*)'.      // query string
    '?)?)?'.                                                   // path and query string optional
    '(#([a-z0-9$_\.\+!\*\'\(\),;:@&=-]|%[0-9a-f]{2})*)?'.      // fragment
    '$/i';

    public function isValid(mixed $toValidate): bool
    {
        return (bool)preg_match($this->regex, (string)$toValidate);
    }
}
