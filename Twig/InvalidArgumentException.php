<?php

namespace FWS\LayoutBundle\Twig;

use InvalidArgumentException as BaseInvalidArgumentException;


/**
 * Class MissingDefaultLayoutException
 * @package LayoutBundle\Twig
 *
 * @author Anthony Howell <anthonyhowell@gmail.com>
 */
class InvalidArgumentException extends BaseInvalidArgumentException
{

    public static function defaultLayoutPropertyRequired()
    {
        return new self('You must configure a default layout. See docs for details');
    }

    public static function defaultLayoutValueRequired()
    {
        return new self('You must configure a default layout. See docs for details');
    }

}