<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class AdminNav extends Widget{
    
    public $items = [];
    
    public function init(){
        parent::init();
        $this->run();
    }
    
    public function run(){
        foreach($this->items as $i => $item){
            $items[] = $this->renderItem($item);
        }
        return Html::tag('ul', implode("\n", $items), ['class' => 'navigation']);
    }
    
    public function renderItem(array $item){
        if (!isset($item['label'])) {
            throw new InvalidConfigException("The 'label' option is required.");
        }
        $label = Html::encode($item['label']);
        $url = ArrayHelper::getValue($item, 'url', '#');
        $iconClass = ArrayHelper::getValue($item, 'icon', '');     
        $icon = '';
        $activeClass = '';
        if ($url == Url::toRoute([''])){
            $activeClass = 'active';
        }
        if (!empty($iconClass)){
            $icon = Html::tag('i', '', ['class' => 'fa fa-' . $iconClass]);
        }
        return Html::tag('li', Html::a($icon.$label, $url, []), ['class' => $activeClass]);
    }
}


