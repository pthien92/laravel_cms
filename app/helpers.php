<?php
/**
 * Created by PhpStorm.
 * User: pthien92
 * Date: 31/05/2016
 * Time: 10:45 PM
 */


    if (! function_exists('theme')) {
        function theme($path)
        {
            $config = app('config')->get('cms.theme');
            return url($config['folder'].'/'.$config['active'].'/assets/'.$path);
        }
}