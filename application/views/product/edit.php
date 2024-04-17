<!-- application/views/product/edit.php -->

<h2>Edit Product</h2>

<form method="post" action="<?= site_url('product/edit/'.$product->product_id) ?>">
    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" value="<?= $product->product_name ?>" required><br>

    <label for="sku_code">SKU Code:</label>
    <input type="text" name="sku_code" value="<?= $product->sku_code ?>" required><br>

    <label for="warranty_period">Warranty Period:</label>
    <input type="text" name="warranty_period" value="<?= $product->warranty_period ?>" required><br>
    <label for="category">category:</label>
    <input type="text" name="category" value="<?= $product->category ?>" required><br>

    <input type="submit" value="Update Product">
</form>
<br>
