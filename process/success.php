<?php  if (count($success) > 1) : ?>
  <div class="success">
  	<?php foreach ($success as $succed) : ?>
  	  <p><b><?php echo $succed ?></b></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>