<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Form Submission Result</h1>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $academicYear = $_POST["academicYear"];
    $email = $_POST["email"];
    $phoneNo = $_POST["phoneNo"];
  ?>

  <table>
    <tr>
      <th>Field</th>
      <th>Value</th>
    </tr>
    <tr>
      <td>First Name</td>
      <td><?php echo $firstName; ?></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><?php echo $lastName; ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?php echo $username; ?></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><?php echo $password; ?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $gender; ?></td>
    </tr>
    <tr>
      <td>Academic Year</td>
      <td><?php echo $academicYear; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <td>Phone No</td>
      <td><?php echo $phoneNo; ?></td>
    </tr>
  </table>

  <?php
  }
  ?>
</body>
</html>

