<div class="container col-8 offset-2">
    <?php foreach ($products as $product): ?>
        <div class="row table-bordered">
            <div class="col-2">
                <img class="img-fluid" src="<?= base_url() . 'img/' . $product->image_file; ?>" alt="">
            </div>
            <div class="col-8 d-flex align-items-center">
                <h5><?= $product->name; ?></h5>
            </div>
            <div class="col-2 text-center">
                <h5><?= $product->price; ?> руб.</h5>
                <a class="btn btn-danger btn-block" href="del/<?= $product->id; ?>" role="button">Удалить</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>