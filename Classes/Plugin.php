<?php

namespace Phile\Plugin\Siezi\PhileAdminCache;

use Phile\Plugin\AbstractPlugin;
use Phile\Plugin\Siezi\PhileAdmin\Lib\AdminPlugin;

class Plugin extends AbstractPlugin
{

    protected $events = [
      'siezi.phileAdmin.beforeAppRun' => 'onAdmin'
    ];

    protected function onAdmin($eventData)
    {
        $adminPlugin = $eventData['app']['adminPlugin_factory'];
        $adminPlugin
          ->setMenu('siezi.phileAdminCache.title', '/cache')
          ->setLocalesFolder($this->getPluginPath('locales'))
          ->setTemplateFolder($this->getPluginPath('views'))
          ->setRoutes(['/cache' => new AdminCache]);
        $eventData['plugins']->add($adminPlugin);
    }

}
