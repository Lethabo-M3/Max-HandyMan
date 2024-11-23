<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $appointmentDate = $_POST['appointmentDate'];
    $appointmentTime = $_POST['appointmentTime'];
    $appointmentType = $_POST['appointmentType'];

    // Prepare the SQL query
    $sql = "INSERT INTO appointments (first_name, last_name, email, contact_number, appointment_date, appointment_time, appointment_type) 
            VALUES (:firstName, :lastName, :email, :contactNumber, :appointmentDate, :appointmentTime, :appointmentType)";
    
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contactNumber', $contactNumber);
    $stmt->bindParam(':appointmentDate', $appointmentDate);
    $stmt->bindParam(':appointmentTime', $appointmentTime);
    $stmt->bindParam(':appointmentType', $appointmentType);
    
    // Execute the query
    if ($stmt->execute()) {
        echo "Appointment booked successfully.";
    } else {
        echo "Error booking appointment.";
    }
}
?>
