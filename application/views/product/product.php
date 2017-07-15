<?php
foreach ($products as $item):
?>
<h2><?= $item['name'] ?></h2>
    <p><?= $item['description'] ?></p>
    <p>Цена: <?= $item['price'] ?></p>
<?php
endforeach;