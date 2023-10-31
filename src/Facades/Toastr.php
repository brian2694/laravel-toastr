<?php

namespace Brian2694\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static message():string
 * @method static add( $type, $message, $title = null, $options = [] ):void
 * @method static info( $message, $title = null, $options = [] ):void
 * @method static success( $message, $title = null, $options = [] ):void
 * @method static warning( $message, $title = null, $options = [] ):void
 * @method static error( $message, $title = null, $options = [] ):void
 * @method static clear( $message, $title = null, $options = [] ):void
 */
class Toastr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}