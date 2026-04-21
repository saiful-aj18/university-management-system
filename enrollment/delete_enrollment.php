<?php
include "../auth/check_auth.php";
include "../config/db.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Use Prepared Statements for safety
    $stmt = $conn->prepare("DELETE FROM Enrollment WHERE enrollment_id = ?");
    $stmt->bind_param("i", $id);
    
    if($stmt->execute()) {
        header("Location: enrollments.php?msg=Deleted Successfully");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
