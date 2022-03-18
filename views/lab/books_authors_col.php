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
            <th>Автор</th>
            <th>Количество написанных книг</th>
        </tr>
    <?php foreach($bookAuthors as $authors): ?>
    <tr>
        <td><?php echo $authors -> name . ' ' . $authors -> surname; ?></td>
        <td><?php $books = $authors->books; echo count($books)?></td>
    </tr>
        <?php endforeach; ?>
    </table>
</div>