<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/jquery-ui.min.css',
        'css/bootstrap.min.css',
        'css/fontawesome/font-awesome.min.css',
        'css/mcustomscrollbar/jquery.mCustomScrollbar.css',
        'css/styles.css',
        'css/diary.css'
    ];
    public $js = [
        'js/jquery-ui.min.js',
        'js/bootstrap.min.js',
        'js/mcustomscrollbar/jquery.mCustomScrollbar.min.js',
        'js/sparkline/jquery.sparkline.min.js',
        'js/knob/jquery.knob.js',
        'js/plugins.js',
        'js/actions.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

