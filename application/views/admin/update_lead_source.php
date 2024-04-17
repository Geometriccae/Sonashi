<?php 	$this->load->view('includes/header',$page_data);   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Lead Source</title>
</head>
<body>
    <h1>Update Lead Source</h1>
    <form method="post" action="<?php echo base_url('admin/update/'.$lead_source->source_id); ?>">
        <label for="source_name">Source Name:</label>
        <input type="text" name="source_name" value="<?php echo $lead_source->source_name; ?>" required>
        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php 	$this->load->view('includes/footer',$page_data);   ?>