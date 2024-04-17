<!DOCTYPE html>
<html>
<head>
    <title>Lines of Business</title>
</head>
<body>
    <h1>List of Lines of Business</h1>

    <a href="<?php echo base_url('Masterdata/line_of_business/create_form'); ?>">Create New Line of Business</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Line of Business</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lines_of_business as $line): ?>
                <tr>
                    <td><?php echo $line->id; ?></td>
                    <td><?php echo $line->line_of_business; ?></td>
                    <td>
                        <a href="<?php echo base_url('Masterdata/line_of_business/edit/' . $line->id); ?>">Edit</a>
                        <a href="<?php echo base_url('Masterdata/line_of_business/delete/' . $line->id); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
