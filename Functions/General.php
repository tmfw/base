<?php

function checkActiveURL($uri){
    return ('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) == $uri ? 'active' : '';
}

if (!function_exists('sys')) {
    /**
     * Get the available container instance.
     *
     * @param  string $make
     * @param  array $parameters
     * @return mixed|\Illuminate\Contracts\Foundation\Application
     */
    function sys($make = null, $parameters = [])
    {
        if (is_null($make)) {
            return app('Illuminate\Container\Container');
        }

        return app('Illuminate\Container\Container')->make($make, $parameters);
    }
}

