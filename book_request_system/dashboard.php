<?php
include('db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

if (isset($_GET['cancel_id'])) {
    $cancel_id = $_GET['cancel_id'];
    $conn->query("DELETE FROM book_requests WHERE id = $cancel_id AND status = 'Pending' AND user_id = $user_id");
}

$sql = "SELECT * FROM book_requests WHERE user_id = $user_id";
$result = $conn->query($sql);
?>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<h3>Your Book Requests:</h3>
<table border="1">
    <tr>
        <th>Book Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['book_title'] ?></td>
        <td><?= $row['author_name'] ?></td>
        <td><?= $row['category'] ?></td>
        <td><?= $row['status'] ?></td>
        <td>
            <?php if ($row['status'] === 'Pending'): ?>
                <a href="?cancel_id=<?= $row['id'] ?>">Cancel</a>
            <?php else: ?>
                Your request for <strong><?= $row['book_title'] ?></strong> is now <strong>completed</strong>.
            <?php endif; ?>
        </td>
    </tr>
    <?php endwhile; ?>
</table>