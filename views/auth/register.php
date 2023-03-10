<?php
/** @var $model \app\models\User */
$this->title = "Sign Up";
?>

<h1>Create an account</h1>

<?php $form = \boomee\phpmvc\form\Form::begin('', 'post') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
<?php $form = \boomee\phpmvc\form\Form::end() ?>


