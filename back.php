<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form   
 with Delete Function</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('URS.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
            backdrop-filter: blur(5px);
            background-color: lightblue;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            height: 20px;
        }

        input[type="submit"],
        input[type="button"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;

            margin-right: 10px;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #45a049;

        }

        .output {
            margin-top: 30px;
            background-color: #eaf1e1;
            padding: 20px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .output p {
            margin: 0;
            padding: 5px 0;
        }

        .output button {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .output button:hover {
            background-color: #0062cc;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>

    <script>
        function validateForm() {

        }

        function deleteEntry(entryId) {
            document.getElementById(entryId).remove();
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Contact Form</h2>
        <div id="error-message" class="error"></div>

        <form id="contactForm" action="" method="POST" onsubmit="return validateForm()">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="first_name" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="last_name" required>

            <label for="age">Age:</label>

            <input type="number" id="age" name="age" required>

            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>   


            <input type="submit" value="Submit">
        </form>

        <div
 id="output-container">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $first_name = htmlspecialchars($_POST['first_name']);
                $last_name = htmlspecialchars($_POST['last_name']);
                $age = htmlspecialchars($_POST['age']);
                $contact = htmlspecialchars($_POST['contact']);
                $address = htmlspecialchars($_POST['address']);

                $uniqueId = uniqid();

                echo "<div class='output' id='entry-$uniqueId'>";
                echo "<div>";
                echo "<h3>Submitted Contact Information</h3>";
                echo "<p><strong>First Name:</strong> $first_name</p>";
                echo "<p><strong>Last Name:</strong> $last_name</p>";
                echo "<p><strong>Age:</strong> $age</p>";
                echo "<p><strong>Contact:</strong>
 $contact</p>";
                echo "<p><strong>Address:</strong> $address</p>";
                echo "</div>";

                echo "<button onclick='deleteEntry(\"entry-$uniqueId\")'>Delete</button>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>