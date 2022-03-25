<?php

use yii\helpers\Url;

?>

<div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>

    <a href="<?php echo Url::to(['authors/index']); ?>" class="btn btn-dark">Авторы</a>
    <a href="<?php echo Url::to(['books/index']); ?>" class="btn btn-dark">Книги</a>
    <a href="<?php echo Url::to(['genre/index']); ?>" class="btn btn-dark">Жанры</a>

    <br><br>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>