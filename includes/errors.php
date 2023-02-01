<?php if(count($errors) > 0): ?>
<?php foreach ($errors as $error) :?>
<div class="alert alert-danger">
    <p> <?= $error; ?> </p>
</div>
<?php endforeach;?>
<?php endif;?>