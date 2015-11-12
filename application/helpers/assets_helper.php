<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
    function css_url($nom)
    {
        return base_url().'assets/theme_1/css/'.$nom.'.css';
    }
}

if ( ! function_exists('js_url'))
{
    function js_url($nom)
    {
        return base_url().'assets/theme_1/js/'.$nom.'.js';
    }
}

if ( ! function_exists('img_url'))
{
    function img_url($nom)
    {
        return base_url().'assets/theme_1/images/'.$nom;
    }
}

if ( ! function_exists('img'))
{
    function img($nom, $alt = '', $style = '', $class = '')
    {
        return '<img style="'.$style.'" class="'.$class.'" src="'.img_url($nom).'" alt="'.$alt.'" />';
    }
}