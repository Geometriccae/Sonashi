<?php 	$this->load->view('includes/header',$page_data);   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Lead Source</title>
</head>
<body>
    <h1>Create Lead Source</h1>
    <form method="post" action="<?php echo base_url('admin/create'); ?>">
        <label for="source_name">Source Name:</label>
        <input type="text" name="source_name" required>
        <input type="submit" value="Create">
    </form>
</body>
</html>

<?php 	$this->load->view('includes/footer',$page_data);   ?>