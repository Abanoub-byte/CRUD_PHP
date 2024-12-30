<?php
require 'db.php';
$sql = "SELECT * FROM users ORDER BY created_at DESC";

$result = pg_query($conn, $sql);

$users = pg_fetch_all($result);


?>

<table>
    
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php foreach($users as $user): ?>

    <tr>
        <td><?= htmlspecialchars($user['id']); ?></td>
        <td><?= htmlspecialchars($user['name']); ?></td>
        <td><?= htmlspecialchars($user['email']); ?></td>
        <td><?= htmlspecialchars($user['created_at']); ?></td>
        
        <td>
            <a href = "update.php?id=<?=$user['id'];?>">Edit</a>
            <a href = "delete.php?id=<?=$user['id'];?>">Delete</a>
        </td>
    </tr>
    <?php endforeach;?>
    </table>
    <a href= "index.html">Add New User</a>