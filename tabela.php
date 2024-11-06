<?php
require 'includes/products.php';
?>
<table>
    <thead>
        <td>
            Nome
        </td>
        <td>
            Preço
        </td>
    </thead>
    <?php
    foreach ($products as $product) {
    ?>
        <table>
           <tr><td><?="{$product['name']}";?></td><td><?="{$product['price']}";?></td></tr>
        </table>
    <?php
    }
    ?>
</table>
<?php