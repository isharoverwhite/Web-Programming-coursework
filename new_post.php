<?php 
if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $author = $_SESSION["username"];
    $sql = "INSERT INTO posts (title, content, username) VALUES ('$title', '$content', '$author')";
    $conn->query($sql);
    header("Location: home.php");
}
?>