<!DOCTYPE html>
<html>
<head>
    <title>Lead Services Required List</title>
</head>
<body>
    <h2>Lead Services Required List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Required Service</th>
            <th>Action</th>
        </tr>
        <?php foreach ($required_list as $required): ?>
            <tr>
                <td><?= $required->id ?></td>
                <td><?= $required->Required ?></td>
                <td>
                    <a href="<?= site_url('lead_services_required_controller/edit_required/' . $required->id) ?>">Edit</a> |
                    <a href="<?= site_url('lead_services_required_controller/delete_required/' . $required->id) ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= site_url('lead_services_required_controller/add_required') ?>">Add New Required Service</a>
</body>
</html>
