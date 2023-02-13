<?php
/** @var $this \boomee\phpmvc\View */
/** @var $model \app\models\ContactForm */
$this->title = 'Contact';

?>

<h1>Contact</h1>

<?php $form = \boomee\phpmvc\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new \boomee\phpmvc\form\TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary mt-3">Submit</button>
<?php $form = \boomee\phpmvc\form\Form::end() ?>
