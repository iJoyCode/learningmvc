<?php
require('Components/Helper/TranslitHelper.php');

class TransliterateController extends BaseController
{
    public function index()
    {
        if (!empty($_POST['text']))
        {
            $this->templater->set('handledText', TranslitHelper::transliterate($_POST['text'], true, '-'));
        }

        $this->templater->display('transliterate/index');
    }
}