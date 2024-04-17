<!-- View: add_service_required.php -->
<h1>Add Service Required</h1>
<form method="post" action="<?php echo base_url('Masterdata/LeadServicesRequired_controller/add_service_required'); ?>">
    <label for="services_required">Services Required:</label>
    <input type="text" name="services_required" id="services_required" required>
    <input type="submit" value="Add">
</form>
