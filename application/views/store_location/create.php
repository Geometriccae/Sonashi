<h2>Create Store Location</h2>
    <form action="<?php echo base_url('store_location/create');?>" method="post">
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location"><br>
        <label for="routes">Routes:</label><br>
        <input type="text" id="routes" name="routes"><br><br>
        <input type="submit" value="Submit">
    </form>