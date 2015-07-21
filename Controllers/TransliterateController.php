<?php namespace App\Controllers;

use App\Components\Core\BaseController;
use Behat\Transliterator\Transliterator;

class TransliterateController extends BaseController
{
    public function index()
    {
        if (!empty($_POST['text']))
        {
            $this->templater->set('handledText', Transliterator::transliterate($_POST['text']));
        }

        $this->templater->display('transliterate/index');
    }
}