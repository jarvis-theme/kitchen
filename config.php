<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Listen on event set up theme.
        'onSetTheme' => function($theme)
        {

        },

        // Listen on event set up layout.
        'onSetLayout' => function($theme)
        {

        },

        // Listen on event before render theme.
        'beforeRenderTheme' => function($theme)
        {
            // You may use this event to set up your assets.
        },

        // Listen on event before render layout.
        'beforeRenderLayout' => function($theme)
        {

        },

        // Listen on event before render theme and layout
        'beforeRenderThemeWithLayout' => function($theme)
        {

        }

    ),
    'num_display' => array(
        'home_product'=>8,
        'main_product'=>12,
        'related_product'=>4,
        'latest_product'=>5,
        'bestseller'=>5,
        'featured'=>3,
        'blog'=>5,
        'testimonial'=>5,    
    ),
    'banner' => true,
    'themesColor' => array(
        'type'=> 'false',
        'warnaDef'=>'header-top: #f8c262;background-slideshow: #fae6c5;bottom-footer: #b67f1b;text-footer: #232227',
        'color'=>false
    ),
    'layout' => array(
        'index1'=>'Layout dengan sidebar'
    ),

);