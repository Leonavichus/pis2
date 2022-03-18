<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Лабораторная работа №2';
?>
<div class="site-lab2">
    <h5 class = "alert alert-success"><?= Html::encode($this->title) ?></h5>
    <a href="<?php echo Url::to(['lab/lab2']); ?>" class="btn btn-success">Авторы</a>
    <a href="<?php echo Url::to(['lab/lab2_1']); ?>" class="btn btn-dark">Книги</a>
    <a href="<?php echo Url::to(['lab/lab2_2']); ?>" class="btn btn-dark">Жанры</a>
    <a href="<?php echo Url::to(['lab/create']); ?>" class="btn btn-primary">Создать</a>
    <br><br>
    <table class="table table-condensed">
        <tr>
            <th>Id</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>День рождения</th>
            <th>День смерти</th>
            <th></th>
        </tr>
    <?php foreach($authorList as $authors): ?>
    <tr>
        <td><?php echo $authors -> id_authors; ?></td>
        <td><?php echo $authors -> surname; ?></td>
        <td><?php echo $authors -> name; ?></td>
        <td> <?php echo $authors -> middle_name; ?></td>
        <td><?php echo $authors -> birthday; ?></td>
        <td><?php echo $authors -> date_death; ?></td>
        <td><a href="<?php echo Url::to(['lab/delete', 'id'=>$authors->id_authors]); ?>" class="btn btn-danger">Удалить</a></td>
    </tr>
        <?php endforeach; ?>
    </table>
</div>
