<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Лабораторная работа №2';
?>
<div class="site-lab2">
    <h5 class = "alert alert-success"><?= Html::encode($this->title) ?></h5>
    <a href="<?php echo Url::to(['lab/lab2']); ?>" class="btn btn-dark">Авторы</a>
    <a href="<?php echo Url::to(['lab/lab2_1']); ?>" class="btn btn-dark">Книги</a>
    <a href="<?php echo Url::to(['lab/lab2_2']); ?>" class="btn btn-dark">Жанры</a>
    <br><br>
    <table class="table table-condensed">
        <tr>
            <th>Id</th>
            <th>Книга</th>
            <th>Описание</th>
            <th>Год написания</th>
            <th>Автор</th>
            <th>Жанр</th>
        </tr>
    <?php foreach($filter as $books): ?>
    <tr>
        <td><?php echo $books -> id_book; ?></td>
        <td><?php echo $books -> name; ?></td>
        <td><?php echo $books -> description; ?></td>
        <td> <?php echo $books -> year_writing; ?></td>
        <td><?php echo $books -> authors -> name . ' ' . $books -> authors -> surname; ?></td>
        <td><?php echo $books -> genre -> name; ?></td>
    </tr>
        <?php endforeach; ?>
    </table>
</div>