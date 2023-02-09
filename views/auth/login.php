<?php
/** @var $model \app\models\User */
?>

<h1>Sign in</h1>

<div class="">
    <?php $form = \app\core\form\Form::begin('', 'post') ?>
        <?php echo $form->field($model, 'email') ?>
        <?php echo $form->field($model, 'password')->passwordField() ?>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    <?php $form = \app\core\form\Form::end() ?>

</div>
