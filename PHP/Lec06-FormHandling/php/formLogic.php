    <style>
        body {
    font-family: Arial, sans-serif;
    display: flex; /* Use flexbox for centering the table container */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically (if needed for entire page) */
    min-height: 100vh; /* Ensure the body takes full viewport height for vertical centering */
    margin: 0; /* Remove default body margin */
    background-color: #f4f4f4;
}

.table-container {
    /* If you want to center the table within a specific container,
       you can apply margin: auto to the table itself, or use flexbox on the container. */
    width: 80%; /* Example width for the container */
    max-width: 900px; /* Max width for larger screens */
    margin: 20px auto; /* Center the container itself if not using body flexbox */
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%; /* Make table fill its container */
    border-collapse: collapse; /* Collapse borders for a cleaner look */
    margin: auto; /* This centers the table horizontally within its parent if it has a defined width */
}

caption {
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 10px;
    text-align: center;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #007bff;
    color: white;
    text-align: center;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #e9e9e9;
}

tfoot {
    font-weight: bold;
    background-color: #e0e0e0;
}

tfoot td {
    text-align: right;
}
    </style>

<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["firstname"])) {
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $country = $_POST["country"];
        $subject = $_POST["subject"];


        
        
        echo "
            <div class='table-container'>
        <table>
            <caption>User Data</caption>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Country</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$firstName</td>
                    <td>$lastName</td>
                    <td>$country</td>
                    <td>$subject</td>
                </tr>
            </tbody>
        </table>
    </div>
        ";
    }else {
        echo "Something went wrong";
    }
}else {
        echo "Error";
    }
?>