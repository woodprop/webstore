
<div class="container col-8 offset-2">
    <div class="row">
    <div class="col-12"><h1><?= $product->name ?></h1></div>
    <div class="col-4">
        <img src="<?= base_url() . 'img/' . $product->image_name ?>" alt="<?= $product->name ?>" class="img-fluid">
    </div>

    <div class="col-6 bg-faded">
        <p><?= $product->description ?></p>
    </div>

    <div class="col-2">
        <h3><?= $product->price ?> руб.</h3>
    </div>
    </div>
</div>