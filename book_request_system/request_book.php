<?php
include('db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $book_title = $_POST['book_title'];
    $author_name = $_POST['author_name'];
    $category = $_POST['category'];

    $sql = "INSERT INTO book_requests (user_id, book_title, author_name, category) VALUES ('$user_id', '$book_title', '$author_name', '$category')";

    if ($conn->query($sql) === TRUE) {
        echo "Book request submitted!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="request_book.php">
    <input type="text" name="book_title" placeholder="Book Title" required>
    <input type="text" name="author_name" placeholder="Author Name" required>
    <select name="category" required>
        <option value="Web Development">Web Development</option>
        <option value="App Development">App Development</option>
        <option value="AI">AI</option>
    </select>
    <button type="submit">Request Book</button>
</form>