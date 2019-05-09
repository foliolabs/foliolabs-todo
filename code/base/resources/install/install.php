<?php
/**
 * Todo - Wordpress example plugin built with FolioKit
 *
 * @copyright   Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/foliolabs/foliolabs-todo for the canonical source repository
 */

return function()
{
    if(is_plugin_active('foliokit/foliokit.php') && did_action('foliokit_after_bootstrap'))
    {
        $installed = get_option('todo_installed');

        if(!$installed)
        {
            $result = \Kodekit::getObject('database.driver.mysqli')
                        ->execute(file_get_contents(__DIR__.'/install.sql'), \Kodekit\Library\Database::MULTI_QUERY);

            if($result) {
                add_option('todo_installed', true);
            } else {
                throw new \RuntimeException("Failed to run queries from ".__DIR__.'/install.sql');
            }
        }
    }
    else wp_die("FolioKit is required!");
};