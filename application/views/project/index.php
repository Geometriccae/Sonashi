<?php 	$this->load->view('includes/header',$page_data);   ?>

<h1>List of Projects</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Project Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td><?php echo $project->id; ?></td>
                <td><?php echo $project->Project; ?></td>
                <td>
                    <a href="<?php echo base_url('ProjectController/edit/' . $project->id); ?>">Edit</a>
                    <a href="<?php echo base_url('ProjectController/delete/' . $project->id); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url('ProjectController/create'); ?>">Create New Project</a>




<?php 	$this->load->view('includes/footer',$page_data);   ?>