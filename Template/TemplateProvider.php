<?php

namespace App\ImpulsoLike\Template;

use Illuminate\Support\ServiceProvider;

class TemplateProvider extends ServiceProvider
{

    public function register()
    {

        require_once app_path('/ImpulsoLike/Template/TemplateFacade.php');

    }

}