<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Toastr
    |--------------------------------------------------------------------------
    |
    | Here You Can Set Toastr's Configurations
    |
    */
    'options' => [
        "closeButton" => false,
        "debug" => false,
        "newestOnTop" => false,
        "progressBar" => false,
        "positionClass" => "toast-top-right",
        "preventDuplicates" => false,
        "onclick" => null,
        "showDuration" => "300",
        "hideDuration" => "1000",
        "timeOut" => "5000",
        "extendedTimeOut" => "1000",
        "showEasing" => "swing",
        "hideEasing" => "linear",
        "showMethod" => "fadeIn",
        "hideMethod" => "fadeOut",
    ],

    /*
    |--------------------------------------------------------------------------
    | Opening Script Tag
    |--------------------------------------------------------------------------
    |
    | Here You Can Adjust The Opening <script> Tag
    |
    */
    'script-tag' => '<script type="text/javascript">',
];
