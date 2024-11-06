<div class="grid-prod">
    <?php
    foreach ($products as $id => $product) {
    ?>
        <a href="detail.php?id=<?= "{$id}"; ?>">
            <div class="prod">
                <div class="prod-img">
                    <img src="assets/shoes/<?= "{$product['model']}-{$product['colors'][0]}-1.avif"; ?>" alt="">
                </div>
                <div class="prod-card">
                    <div class="prod-name">
                        <?= "{$product['name']}"; ?>
                    </div>
                    <div class="prod-cat">
                        <?= "{$product['category']}"; ?>
                    </div>
                    <div class="prod-price">
                        <div>
                            <span class="price-current">
                                <?php
                                Discount($product['price'], $product['discount']);
                                ?>
                            </span>
                            <span class="payment">no Pix</span>
                        </div>
                        <div aria-label="preço antigo" class="old-price">
                            <?php
                            Price($product['price']);
                            ?></div>
                        <div class="discount">
                            <?= "{$product['discount']}%"; ?> off</div>
                    </div>
                </div>

            </div>
        </a>
    <?php
    }
