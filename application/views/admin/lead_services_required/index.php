<!-- View: services_required_list.php -->
<h1>Services Required List</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Services Required</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($services_required as $service_required) { ?>
            <tr>
                <td><?php echo $service_required->id; ?></td>
                <td><?php echo $service_required->ServicesRequired; ?></td>
                <td>
                    <a href="<?php echo base_url('Masterdata/LeadServicesRequired_controller/edit_service_required/' . $service_required->id); ?>">Edit</a>
                    <a href="<?php echo base_url('Masterdata/LeadServicesRequired_controller/delete_service_required/' . $service_required->id); ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<a href="<?php echo base_url('Masterdata/LeadServicesRequired_controller/add_service_required'); ?>">Add Service Required</a>
