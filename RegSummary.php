<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $dob = htmlspecialchars(trim($_POST['dob']));
    $sex = htmlspecialchars(trim($_POST['sex']));
    $email = htmlspecialchars(trim($_POST['email']));
    $address = htmlspecialchars(trim($_POST['address']));
    $department = htmlspecialchars(trim($_POST['department']));
    $program = htmlspecialchars(trim($_POST['program']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    
    // Check required fields
    if (empty($name) || empty($email)) {
        header("Location: register.php");
        exit();
    }
    
    // Determine background color based on sex
    $nameBackgroundColor = ($sex === 'Male') ? 'blue' : 'red';
    $nameColor = 'white';
    
    // Display the summary
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Summary Page</title>
        <style>
            body {
                background-color: Lightskyblue;
                font-family: Arial, sans-serif;
            }
            .container {
                width: 50%;
                margin: auto;
                padding: 20px;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            .name-cell {
                background-color: <?= $nameBackgroundColor ?>;
                color: <?= $nameColor ?>;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Registration Summary</h1>
            <table>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td class="name-cell"><?= $name ?></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><?= $dob ?></td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td><?= $sex ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?= $address ?></td>
                </tr>
                <tr>
                    <td>College Department</td>
                    <td><?= $department ?></td>
                </tr>
                <tr>
                    <td>Program</td>
                    <td><?= $program ?></td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td><?= $mobile ?></td>
                </tr>
            </table>
        </div>
    </body>
    </html>
    <?php
} else {
    // Redirect to the registration page if not submitted via POST
    header("Location: register.php");
    exit();
}
