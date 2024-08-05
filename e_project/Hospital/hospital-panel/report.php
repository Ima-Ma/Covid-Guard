<?php
require_once __DIR__ . '/vendor/autoload.php';

// Check if ID parameter is provided and is numeric
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $ID = $_GET["id"];

    // Initialize database connection (replace with your credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e_project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement with a prepared statement to prevent SQL injection
    $sql = "SELECT * FROM report WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ID); // "i" indicates the parameter type is integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $rows = $result->fetch_assoc();

        // Start generating PDF using mPDF
        $mpdf = new \Mpdf\Mpdf(['format'=>'A4-L']);
        // HTML content to be converted to PDF
        $html = '
        <div class="container" style="text-align: center;">
            <h1 class="display-2" style="margin-bottom: 20px;">COVID GUARD</h1>
            <table class="table table-responsive-sm" style="border-collapse: collapse; width: 100%;">
                <thead style="border: 1px solid black;">
                    <tr>
                        <th style="border: 1px solid black;">Id</th>
                        <th style="border: 1px solid black;">First Name</th>
                        <th style="border: 1px solid black;">Email</th>
                        <th style="border: 1px solid black;">CNIC</th>
                        <th style="border: 1px solid black;">Date Of Birth</th>
                        <th style="border: 1px solid black;">Location</th>
                        <th style="border: 1px solid black;">Post Code</th>
                        <th style="border: 1px solid black;">Vaccine</th>
                        <th style="border: 1px solid black;">Status</th>
                    </tr>
                </thead>
                <tbody style="border: 1px solid black;" class="text-dark">
                    <tr>
                        <td style="border: 1px solid black;">' . htmlspecialchars($rows['id']) . '</td>
                        <td style="border: 1px solid black;">' . htmlspecialchars($rows['first_name']) . '</td>
                        <td style="border: 1px solid black;">' . htmlspecialchars($rows['email']) . '</td>
                        <td style="border: 1px solid black;">' . htmlspecialchars($rows['cnic_number']) . '</td>
                        <td style="border: 1px solid black;">' . htmlspecialchars($rows['dob']) . '</td>
                        <td style="border: 1px solid black;">' . htmlspecialchars($rows['location']) . '</td>
                        <td style="border: 1px solid black;">' . htmlspecialchars($rows['post_code']) . '</td>
                        <td style="border: 1px solid black;">' . htmlspecialchars($rows['vaccine']) . '</td>
                        <td style="border: 1px solid black;">' . htmlspecialchars($rows['status']) . '</td>
                    </tr>
                </tbody>
            </table>
        </div>
    ';

        // Output PDF
        $mpdf->WriteHTML($html);

        // Save PDF to file and offer it for download
        $file = "report.pdf";
        $mpdf->Output($file, 'D'); // 'D' for download, 'I' for inline display

        // Close statement and connection
        $stmt->close();
        $conn->close();
        exit;
    } else {
        echo "No records found for ID: " . htmlspecialchars($ID);
    }
} else {
    echo "Invalid or missing ID parameter.";
}

?>