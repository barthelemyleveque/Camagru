<?php  $this->_t = "Camagru 📷";

foreach($images as $image): ?>
<h2><?= $image->title() ?></h2>
<time><?= $image->date()?></time>
<?php endforeach; ?>