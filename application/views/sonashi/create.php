
<form action="<?php echo base_url('Repair/create'); ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required><br>

    <label for="purchase_location">Purchase Location:</label>
    <input type="text" id="purchase_location" name="purchase_location" required><br>

    <label for="purchase_date">Purchase Date:</label>
    <input type="date" id="purchase_date" name="purchase_date" required><br>

    <label for="warranty_status">Warranty Status:</label>
    <select id="warranty_status" name="warranty_status" required>
        <option value="valid">Valid</option>
        <option value="expired">Expired</option>
    </select><br>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required><br>

    <label for="contact_number">Contact Number:</label>
    <input type="tel" id="contact_number" name="contact_number" required><br>

    <label for="alt_contact_number">Alternative Contact Number:</label>
    <input type="tel" id="alt_contact_number" name="alt_contact_number"><br>

    <input type="submit" value="Submit">
</form>
