<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><b><?php echo $error ?></b></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>