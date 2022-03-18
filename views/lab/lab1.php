<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Лабораторная работа №1';
?>
<nav class="site-lab1">
<h5 class = "alert alert-success"><?= Html::encode($this->title) ?></h5>
<div class="main">
    <div class="item_left">
        <h5>Отзыв о ресторане</h5>
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'name')->label('Ваше имя:') ?>
        <?= $form->field($model, 'email')->label('Ваш e-mail:') ?>
        <?= $form->field($model, 'date')->label('Дата посещения:')->widget(\yii\widgets\MaskedInput::className(), [
        'mask' => '99.99.9999',]) ?>
        <?= $form->field($model, 'age')->label('Ваш возраст:') ?>
        <?= $form->field($model, 'favCuisine')->label('Любиммая кухня:')->dropDownList([
            0 => 'Нет любимой кухни',
            1 => 'Китайская',
            2 => 'Испанская',
            3 => 'Немецкая',
            4 => 'Английская' 
        ])?>
        <?= $form->field($model, 'recFriend')->label('Порекомендуете нас друзьям?')->radioList(
            [
            1 => 'Да',
            2 => 'Нет'
            ])?>
        <?= $form->field($model, 'review')->label('Текст отзыва:')->textarea() ?>
        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    
    <?php if($model->load(Yii::$app->request->post())){
        ?>
    <div class="item_right">
    <h5>Переданный отзыв:</h5>
    <table class="table table-bordered">
        <tr>
            <td>Ваше имя:</td>
            <td><?= Html::encode($model->name)?></td>
        </tr>
        <tr>
            <td>Ваш e-mail:</td>
            <td><?= Html::encode($model->email)?></td>
        </tr>
        <tr>
            <td>Дата посещения:</td>
            <td><?= Html::encode($model->date)?></td>
        </tr>
        <tr>
        <td>Ваш возраст:</td>
            <td><?= Html::encode($model->age)?></td>
        </tr>
        <tr>
            <td>Любиммая кухня:</td>    
            <td><?= Html::encode($model->favCuisine)?></td>
        </tr>
        <tr>
            <td>Порекомендуете нас друзьям?</td>
            <td><?= Html::encode($model->recFriend)?></td>
        </tr>
        <tr>
        <td>Текст отзыва:</td>
            <td><?= Html::encode($model->review)?></td>
        </tr>
    </table>
    </div>
    <?php }?>
</div>
</nav>

<style>
    .main{
        min-width: 1024px;
        overflow: hidden;
    }
    .item_left{
        float:left;
        width:50%;
        min-width: 512px;
    }
    .item_right{
        float:right;
        min-width: 512px;
    }
</style>
<?php ActiveForm::end(); ?>
