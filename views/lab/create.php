<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Добавить автора</h1>
<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'surname')->label('Фамилия:'); ?>
    <?php echo $form->field($model, 'name')->label('Имя:'); ?>
    <?php echo $form->field($model, 'middle_name')->label('Отчество:'); ?>
    <?php echo $form->field($model, 'birthday')->label('Дата рождения:'); ?>
    <?php echo $form->field($model, 'date_death')->label('Дата смерти:'); ?>

    <?php echo Html::submitButton('Save',[
        'class' => 'btn btn-primary'
    ]); ?>

<?php ActiveForm::end(); ?>