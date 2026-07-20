<?php
/**
 * This file is part of yii2-imperavi-widget.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/aliadinov/yii2-imperavi-widget
 */

namespace aliadinov\imperavi\tests\functional\data\bundles;

use yii\web\AssetBundle;

/**
 * @author Vasile Crudu <bazillio07@yandex.ru>
 *
 * @link https://github.com/aliadinov
 */
final class TestPlugin extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@aliadinov/imperavi/tests/../../src/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'redactor.min.js',
    ];
}
