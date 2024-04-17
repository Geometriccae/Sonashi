<!-- sonashi/products.php -->
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="card-title">Agent Reports</h2>
                    </div>

                    <!-- Store locations list table -->
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Agent Name</th>
                                <th>Pending</th>
                                <th>Completed</th>
                                <th>Total</th> <!-- Changed header from "In Process" to "Total" -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ravi</td>
                                <td>
                                    <?= $status_counts['pending'] ?? 0 ?>
                                </td>
                                <td>
                                    <?= $status_counts['completed'] ?? 0 ?>
                                </td>
                                <td>
                                    <?= ($status_counts['pending'] ?? 0) + ($status_counts['completed'] ?? 0) ?>
                                </td> <!-- Calculate and display total -->
                            </tr>
                            <tr>
                                <td>Kalai</td>
                                <td>
                                    <?= $status_counts_kalai['pending'] ?? 0 ?>
                                </td>
                                <td>
                                    <?= $status_counts_kalai['completed'] ?? 0 ?>
                                </td>
                                <td>
                                    <?= ($status_counts_kalai['pending'] ?? 0) + ($status_counts_kalai['completed'] ?? 0) ?>
                                </td> <!-- Calculate and display total -->
                            </tr>
                            <tr>
                                <td>Akash</td>
                                <td>
                                    <?= $status_counts_akash['pending'] ?? 0 ?>
                                </td>
                                <td>
                                    <?= $status_counts_akash['completed'] ?? 0 ?>
                                </td>
                                <td>
                                    <?= ($status_counts_akash['pending'] ?? 0) + ($status_counts_akash['completed'] ?? 0) ?>
                                </td> <!-- Calculate and display total -->
                            </tr>
                            <tr>
                                <td>Suthakar</td>
                                <td>
                                    <?= $status_counts_suthakar['pending'] ?? 0 ?>
                                </td>
                                <td>
                                    <?= $status_counts_suthakar['completed'] ?? 0 ?>
                                </td>
                                <td>
                                    <?= ($status_counts_suthakar['pending'] ?? 0) + ($status_counts_suthakar['completed'] ?? 0) ?>
                                </td> <!-- Calculate and display total -->
                            </tr>

                        </tbody>
                    </table>



                    <br>
                </div>
            </div>
        </div>
    </div>
</div>