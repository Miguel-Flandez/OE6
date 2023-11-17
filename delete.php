<?php
include("connect.php"); // Include your database connection file

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Delete the user with the specified ID
    $query = "DELETE FROM user_tbl WHERE id = '$user_id'";
    $result = $conn->query($query);

    if ($result == TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Record successfully deleted. . .")';
        echo '</script>';
        ?>
        <script type="text/javascript">
            window.location.href = 'admin_dashboard.php';
        </script>
    <?php
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Error in deleting record. . .")';
        echo '</script>';
    }
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Invalid request. . .")';
    echo '</script>';
}
?>
