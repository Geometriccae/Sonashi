<?php 	$this->load->view('includes/header',$page_data);   ?>
<h1>Create Project</h1>
<form method="post" action="<?php echo base_url('ProjectController/create'); ?>">
    <label for="Project">Project Name:</label>
    <input type="text" id="Project" name="Project" required>
    <input type="submit" value="Create">
</form>



<?php 	$this->load->view('includes/footer',$page_data);   ?>