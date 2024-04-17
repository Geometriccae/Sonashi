<!-- add_lead_status_form.php -->
<?php 	$this->load->view('includes/header',$page_data);   ?>
<!-- edit_lead_status_form.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Lead Status</title>
</head>
<body>
    <h1>Edit Lead Status</h1>

    <form method="post" action="<?php echo base_url('admin/edit_lead_status/' . $lead_status['status_id']); ?>">
        <label>Status Name:</label>
        <input type="text" name="status_name" value="<?php echo $lead_status['status_name']; ?>" required>
        <br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php 	$this->load->view('includes/footer',$page_data);   ?>