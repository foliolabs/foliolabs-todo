<?php
/**
 * Todo - Wordpress example plugin built with FolioKit
 *
 * @copyright   Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/foliolabs/foliolabs-todo for the canonical source repository
 */

namespace Foliolabs\Todo\Site;
use Foliolabs\Component\Base;
use Kodekit\Library;

class Dispatcher extends Base\Dispatcher
{
    protected function _initialize(Library\ObjectConfig $config)
    {
        $config->append(array(
            'controller' => 'task',
        ));

        parent::_initialize($config);
    }

    protected function _resolveRequest(Library\DispatcherContext $context)
    {
        parent::_resolveRequest($context);

        $context->getRequest()->getHeaders()->set('X-Flush-Response', 1);

        if($context->request->query->get('view', 'cmd') === 'task') {
            $context->getRequest()->getHeaders()->set('X-Flush-Response', 1);
        }
    }
}
