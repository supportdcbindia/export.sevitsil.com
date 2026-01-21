<?php
$perPage = 8;
$page = isset($_POST['page']) ? (int)$_POST['page'] : 1;

$data = glob("../assets/images/product/*.*");
sort($data);

$totalItems = count($data);
$totalPages = ceil($totalItems / $perPage);

$start = ($page - 1) * $perPage;
$items = array_slice($data, $start, $perPage);

// PRODUCTS
foreach ($items as $p) {
?>
    <div class="productItem">
        <div class="productImage">
            <img src="<?= $p ?>" alt="">
        </div>
        <div class="productContent">
            <h5><?= str_replace("-", " ", pathinfo($p, PATHINFO_FILENAME)); ?></h5>
        </div>

        <div class="BtnOverlay">
            <a href="#!" class="click1">Get a Quote</a>
        </div>
    </div>
<?php
}

// PAGINATION
echo '<script>renderPagination(' . $totalPages . ', ' . $page . ');</script>';
