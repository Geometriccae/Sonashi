<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Add Product</h2>
                <form method="post" action="<?= site_url('product/add') ?>">
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="sku_code" class="form-label">SKU Code:</label>
                <input type="text" class="form-control" id="sku_code" name="sku_code" placeholder="Enter SKU Code" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="warranty_period" class="form-label">Warranty Period:</label>
                <input type="text" class="form-control" id="warranty_period" name="warranty_period" placeholder="Enter Warranty Period" required>
            </div>
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Add Product</button>
</form>

                <br>
                <a href="<?= site_url('product') ?>" class="btn btn-secondary">Back to Product List</a>
            </div>
        </div>
    </div>
</div>
