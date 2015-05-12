<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;
use app\components\AdminNav;

/* @var $this \yii\web\View */
/* @var $content string */

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
        <div class="page-container">
            <div class="page-head">
                <ul class="page-head-elements">
                    <li><a href="#" class="page-navigation-toggle"><span class="fa fa-bars"></span></a></li>342lo
                </ul>
                <ul class="page-head-elements pull-right">
                    <li><a href="<?=Url::to(['/logout']);?>"><span style="color: #F00;" class="fa fa-unlink"</span></a></li>
                </ul>
            </div>
            
            <div class="page-navigation">
                
                <div class="page-navigation-info">
                    <a href="<?=Url::home();?>" class="main-logo"><?=Yii::t('app', 'Админ Панель')?></a>
                </div>
                <?= AdminNav::widget([
                    'items' => [
                        ['label' => Yii::t('app','Панель Управления'), 'url' => '/dashboard/index', 'icon' => 'dashboard'],
                        ['label' => Yii::t('app','Контакты'), 'url' => '#', 'icon' => 'envelope'],
                    ]
                ]); ?>
            </div>
            
            <div class="page-content">
                <div class="container">
                    <div class="page-toolbar">
                        
                        <div class="page-toolbar-block">
                            <div class="page-toolbar-title"><?=$this->title;?></div>
                            <div class="page-toolbar-subtitle"><?=isset($this->params['description'])?$this->params['description']:'';?></div>
                        </div>           
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </div>
                    <div class="content">
                        <?= $content ?>
                        <div class="modal fade" id="modal-contact-form" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="page-sidebar"></div>
        </div>

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>