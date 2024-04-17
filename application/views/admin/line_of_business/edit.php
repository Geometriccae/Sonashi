<!DOCTYPE html>
<html>
<head>
    <title>Edit Line of Business</title>
</head>
<body>
    <h1>Edit Line of Business</h1>

    <form method="post" action="<?php echo base_url('Masterdata/line_of_business/update/' . $line_of_business->id); ?>">
        <label for="line_of_business">Line of Business:</label>
        <input type="text" name="line_of_business" value="<?php echo $line_of_business->line_of_business; ?>">
    
        <button type="submit">Update</button>
    </form>
</body>
</html>
