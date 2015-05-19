<?php

namespace Phile\Plugin\Siezi\PhileAdminCache;

use Phile\Core\ServiceLocator;
use Phile\Plugin\Siezi\PhileAdmin\Lib\AdminController;
use Silex\Application;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;


class AdminCache extends AdminController
{

    public function index(Request $request)
    {
        $active = $vars['active'] = ServiceLocator::hasService('Phile_Cache');
        if ($active) {
            $cache = ServiceLocator::getService('Phile_Cache');
            $vars['engine'] = get_class($cache);
        }

        $form = $this->app['form.factory']->createBuilder('form')
          ->add('clean', 'hidden', ['data' => true])
          ->getForm();

        $form->handleRequest($request);

        if ($active && $form->isValid()) {
            $cache->clean();
            $filesystem = new Filesystem();
            if ($filesystem->exists(CACHE_DIR)) {
                $filesystem->remove(CACHE_DIR);
            }
            $this->flash($this->trans('siezi.phileAdminCache.cache.success'), 'success');
        }
        $vars['form'] = $form->createView();

        return $this->render('caches/index.twig', $vars);
    }

}
