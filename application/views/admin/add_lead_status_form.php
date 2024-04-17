<!-- add_lead_status_form.php -->
<?php 	$this->load->view('includes/header',$page_data);   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add New Lead Status</title>
</head>
<body>
    <h1>Add New Lead Status</h1>

    <form method="post" action="<?php echo base_url('admin/add_lead_status'); ?>">
        <label>Status Name:</label>
        <input type="text" name="status_name" required>
        <br><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
<?php 	$this->load->view('includes/footer',$page_data);   ?>