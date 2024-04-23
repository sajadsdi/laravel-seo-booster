<?php

use Illuminate\Contracts\Container\BindingResolutionException;
use Sajadsdi\LaravelSeoBooster\Seo;


if (!function_exists('seo')) {
    /**
     * @param string|null $name
     * @param mixed|null $value
     * @return mixed|Seo
     * @throws BindingResolutionException
     */
    function seo(string $name = null, mixed $value = null): mixed
    {
        $heading = app()->make(Seo::class);

        if ($name) {
            if($value){
                $method = 'set' . ucfirst($name);
                $heading->{$method}($value);
            }else{
                $method = 'get' . ucfirst($name);
                return $heading->{$method}();
            }
        }

        return $heading;
    }
}
