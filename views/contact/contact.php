<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>

<h2><strong><?=Yii::t('app','Контактная форма')?></strong></h2>    
<p><?=Yii::t('app','Вы можете связаться с администрацией проекта с помощью данной контактной формы!')?></p>
<?php $form = ActiveForm::begin(['id' => $model->formName()]); ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'subject') ?>
    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>
<?php ActiveForm::end(); ?>

<script>
    $('form#<?=$model->formName()?>').on('beforeSubmit', function(e) {
        $.post('/contact/index', $(this).serialize(), function(data){
            $('#modal-contact-form .modal-body').html(data.message);
        });
    }).on('submit', function(e){
        e.preventDefault();
    });
</script>
