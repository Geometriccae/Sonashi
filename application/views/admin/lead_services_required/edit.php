<!-- View: edit_service_required.php -->
<h1>Edit Service Required</h1>
<form method="post" action="<?php echo base_url('Masterdata/LeadServicesRequired_controller/edit_service_required/' . $service_required->id); ?>">
    <label for="services_required">Services Required:</label>
    <input type="text" name="services_required" id="services_required" value="<?php echo $service_required->ServicesRequired; ?>" required>
    <input type="submit" value="Update">
</form>
