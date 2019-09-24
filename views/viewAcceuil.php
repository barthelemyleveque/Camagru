<?php  $this->_t = "Camagru 📷";

foreach($images as $image): ?>
<h2><?= $image->title() ?></h2>
<img src="<?= $image->url() ?>">
<time><?= $image->date()?></time>
<?php endforeach; ?>