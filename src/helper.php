<?php

if (! function_exists('toastr')) {
    /**
     * Return the instance of toastr.
     *
     * @return Brian2694\Toastr\Toastr
     */
    function toastr()
    {
        return app('toastr');
    }
}