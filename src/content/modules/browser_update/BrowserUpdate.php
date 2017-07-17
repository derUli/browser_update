<?php

class BrowserUpdate extends Controller
{

    public function beforeContent()
    {
        return Template::executeModuleTemplate("browser_update", "script");
    }
}