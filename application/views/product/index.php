<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Product List</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>#">GES</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product List</li>
            </ol>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div><!-- sonashi/products.php -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="card-title">Product List</h2>
                    </div>
                    <a href="<?= site_url('product/add') ?>" class="btn btn-primary">Add Product</a>
                    <!-- Product list table -->
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>SKU Code</th>
                                <th>Warranty Period</th>
                                <th>Warranty Period</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td>
                                        <?= $product->product_id ?>
                                    </td>
                                    <td>
                                        <?= $product->product_name ?>
                                    </td>
                                    <td>
                                        <?= $product->sku_code ?>
                                    </td>
                                    <td>
                                        <?= $product->warranty_period ?>
                                    </td>
                                    <td>
                                        <?= $product->category ?>
                                    </td>
                                    <td>
                                        <a href="<?= site_url('product/edit/' . $product->product_id) ?>"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?= site_url('product/delete/' . $product->product_id) ?>"
                                            onclick="return confirm('Are you sure?')"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>