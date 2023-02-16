<?php
namespace App\View\Helper;

use Cake\View\Helper;

class WebrootHelper extends Helper
{
    public function url($path)
    {
        return $this->_View->webroot($path);
    }
}