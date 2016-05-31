<?php
/**
 * Created by PhpStorm.
 * User: pthien92
 * Date: 31/05/2016
 * Time: 9:28 PM
 */
namespace App\View;

use Illuminate\View\FileViewFinder;

class ThemeViewFinder extends FileViewFinder
{
    protected $activeTheme;

    protected $basePath;

    public function setBasePath($path)
    {
        $this->basePath = $path;
    }

    public function setActiveTheme($theme) {
        $this->activeTheme = $theme;
        array_unshift($this->paths, $this->basePath. '/' .$theme.'/views');
    }
}