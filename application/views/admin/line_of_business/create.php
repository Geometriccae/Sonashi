<!DOCTYPE html>
<html>
<head>
    <title>Create Line of Business</title>
</head>
<body>
    <h1>Create Line of Business</h1>

    <form method="post" action="<?php echo base_url('Masterdata/line_of_business/create'); ?>">
        <label for="line_of_business">Line of Business:</label>
        <input type="text" name="line_of_business" placeholder="Enter the Line of Business">
        <button type="submit">Create</button>
    </form>
    
    <a href="<?php echo base_url('line_of_business'); ?>">Back to List</a>
</body>
</html>
