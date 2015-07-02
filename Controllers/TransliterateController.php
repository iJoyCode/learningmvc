<?php
require('Components/Helper/TranslitHelper.php');

class TransliterateController extends BaseController
{
    public function index()
    {
        if (!empty($_POST['text']))
        {
            echo TranslitHelper::transliterate($_POST['text'], true, '-');
        }

        require('Views/Transliterate/index.html');
    }
}