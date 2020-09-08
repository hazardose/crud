<?php
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';

//get database connection
$database = new Database();
$db = $database->getConnection();

//pass connection to objects

$product = new Product($db);
$category = new Category($db);

$page_title = "Create Product";
include_once 'layout_header.php';

echo "<div class='right-button-margin'>
        <a href='index.php' class='btn btn-default pull-right'>Read Products</a>
        </div>";

// footer
include_once 'layout_footer.php';
?>

<?php
// 'create product' html form will be here 

?>