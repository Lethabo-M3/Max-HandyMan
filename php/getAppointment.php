<?php
include 'db.php';

// Retrieve all appointments from the database
$sql = "SELECT * FROM appointments ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetch all appointments
$appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($appointments as $appointment) {
    echo "<tr>
            <td>{$appointment['first_name']}</td>
            <td>{$appointment['last_name']}</td>
            <td>{$appointment['email']}</td>
            <td>{$appointment['contact_number']}</td>
            <td>{$appointment['appointment_date']}</td>
            <td>{$appointment['appointment_time']}</td>
            <td>{$appointment['appointment_type']}</td>
            <td>
                <button class='btn update' onclick='updateAppointment({$appointment['id']})'>Update</button>
                <button class='btn delete' onclick='deleteAppointment({$appointment['id']})'>Delete</button>
            </td>
        </tr>";
}
?>
