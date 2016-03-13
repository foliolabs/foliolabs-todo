<?php
/**
 * Todo - Wordpress example plugin built with Wordplugs Framework
 *
 * @copyright   Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/wordplugs/wordplugs-todo for the canonical source repository
 */

use Wordplugs\Component\Base;

class TodoDispatcher extends Base\Dispatcher
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'controller' => 'task',
        ));

        parent::_initialize($config);
    }

    public function getRequest()
    {
        $request = parent::getRequest();

        $query = $request->query;

        // Force tmpl=koowa for form layouts
        if ($query->layout === 'form') {
            $query->tmpl = 'koowa';
        }

        return $request;

    }
}
