<?
/**
 * Todo - Wordpress example plugin built with FolioKit
 *
 * @copyright   Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/foliolabs/foliolabs-todo for the canonical source repository
 */

defined('KODEKIT') or die; ?>

<?= helper('ui.load'); ?>

<? // Toolbar ?>
<div class="koowa_toolbar">
    <ktml:toolbar type="actionbar">
</div>

<? // Form ?>
<div class="koowa_form">
    <div class="todo_form_layout">
        <form action="<?= route('id='. $task->id) ?>" method="post" class="-koowa-form">

            <div class="todo_container">
                <div class="todo_grid">
                    <div class="todo_grid__task two-thirds">

                        <? // Details fieldset ?>
                        <fieldset>
                            <legend><?= translate('Details') ?></legend>

                            <?= import('com://site/todo/task/form_details.html') ?>

                        </fieldset>

                        <? // Description fieldset ?>
                        <fieldset>
                            <legend><?= translate('Description') ?></legend>

                            <?= import('com://site/todo/task/form_description.html') ?>

                        </fieldset>
                    </div>

                    <div class="todo_grid_task one-third">
                        <? // Publishing fieldset ?>
                        <fieldset>
                            <legend><?= translate('Publishing') ?></legend>

                            <?= import('com://site/todo/task/form_publishing.html') ?>

                        </fieldset>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>