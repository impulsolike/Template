<?php

namespace App\ImpulsoLike\Template;

use App\ImpulsoLike\General\GeneralConfig;

class TemplateConfig extends GeneralConfig
{

    const CONFIG_FILE       = 'impulsolike_theme';
    const DEFAULT_CONFIG    = [
        'template'          => 'Template',
        'layout'            => 'app',
        'class'             => 'view',
        'settings'          => 'settings',
        'contents'          => 'contents',
        'components'        => 'components',
        'assets'            => 'impulsolike_template_assets',
        'cdn'               => 'impulsolike_template_cdn',
        'content'           => 'welcome',
    ];

}
