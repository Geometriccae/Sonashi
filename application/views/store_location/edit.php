<h2>Update Store Location</h2>
    <form action="<?php echo base_url('store_location/update/'.$location['id']);?>" method="post">
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" value="<?php echo $location['location'];?>"><br>
        <label for="routes">Routes:</label><br>
        <input type="text" id="routes" name="routes" value="<?php echo $location['routes'];?>"><br><br>
        <input type="submit" value="Submit">
    </form>