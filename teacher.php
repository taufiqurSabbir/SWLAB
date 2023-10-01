<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Teacher List</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>
            <th>Name</th>
            <th>NID</th>
            <th>Birth</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Replace the following section with your server-side code (e.g., PHP) to fetch teacher data from the database
        // and populate the table dynamically.

        // Sample data (to be replaced)
        $teachers = array(
            array('id' => 1, 'dept' => 'Mathematics', 'name' => 'Alice Johnson', 'nid' => '56789', 'birth' => '1985-04-12', 'address' => '789 Oak St'),
            array('id' => 2, 'dept' => 'Physics', 'name' => 'Bob Smith', 'nid' => '12345', 'birth' => '1978-10-25', 'address' => '456 Elm St'),
        );

        foreach ($teachers as $teacher) {
            echo "<tr>";
            echo "<td>" . $teacher['id'] . "</td>";
            echo "<td>" . $teacher['dept'] . "</td>";
            echo "<td>" . $teacher['name'] . "</td>";
            echo "<td>" . $teacher['nid'] . "</td>";
            echo "<td>" . $teacher['birth'] . "</td>";
            echo "<td>" . $teacher['address'] . "</td>";
            echo "<td>
                          <a href='edit_teacher.php?id=" . $teacher['id'] . "' class='btn btn-primary'>Edit</a>
                          <a href='delete_teacher.php?id=" . $teacher['id'] . "' class='btn btn-danger'>Delete</a>
                      </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<!-- Include Bootstrap JS and jQuery (if needed) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
