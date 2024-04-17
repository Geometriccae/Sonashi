<?php 	$this->load->view('includes/header',$page_data);   ?>
<h1>Edit Project</h1>
<form method="post" action="<?php echo base_url('ProjectController/update/' . $project->id); ?>">
    <label for="Project">Project Name:</label>
    <input type="text" id="Project" name="Project" value="<?php echo $project->Project; ?>" required>
    <input type="submit" value="Update">
</form>


<?php 	$this->load->view('includes/footer',$page_data);   ?>