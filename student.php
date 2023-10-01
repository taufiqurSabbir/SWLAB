<?php

include 'core/controller.php';
$controller = new Controller();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Student List</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Student
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">




                    <form method="post">
                        <div class="form-group">
                            <label for="studentDept">Department</label>
                            <input type="text" class="form-control" id="studentDept" name="studentDept" placeholder="Department">
                        </div>
                        <div class="form-group">
                            <label for="studentName">Name</label>
                            <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="studentNID">NID</label>
                            <input type="text" class="form-control" id="studentNID" name="studentNID" placeholder="NID">
                        </div>
                        <div class="form-group">
                            <label for="studentBirth">Birth</label>
                            <input type="date" class="form-control" id="studentBirth" name="studentBirth">
                        </div>
                        <div class="form-group">
                            <label for="studentAddress">Address</label>
                            <input type="text" class="form-control" id="studentAddress" name="studentAddress" placeholder="Address">
                        </div>
                        <button type="submit" class="btn btn-primary" name="addStudent">Add Student</button>
                    </form>

                    <?php
                    if (isset($_POST['submit'])){

                        if(empty($_POST['task'] && $_POST['date'] && $_POST['studentDept'] && $_POST['studentName'] && $_POST['studentNID'] && $_POST['studentBirth'] && $_POST['studentAddress'])){
                            echo "<P class='alert alert-danger'> Empty task and date not allowed</P>";
                        }else{
                            $controller -> addStudent($_POST['task']);
                            echo "<P class='alert alert-success'> Task Added</P>";
                            header("location:index.php");

                        }
                    }
                    ?>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
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
        // Replace the following section with your server-side code (e.g., PHP) to fetch student data from the database
        // and populate the table dynamically.

        // Sample data (to be replaced)
        $students = array(
            array('id' => 1, 'dept' => 'Computer Science', 'name' => 'John Doe', 'nid' => '12345', 'birth' => '2000-01-15', 'address' => '123 Main St'),
            array('id' => 2, 'dept' => 'Mathematics', 'name' => 'Jane Smith', 'nid' => '67890', 'birth' => '1999-05-20', 'address' => '456 Elm St'),
        );

        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['id'] . "</td>";
            echo "<td>" . $student['dept'] . "</td>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td>" . $student['nid'] . "</td>";
            echo "<td>" . $student['birth'] . "</td>";
            echo "<td>" . $student['address'] . "</td>";
            echo "<td>
                          <a href='edit_student.php?id=" . $student['id'] . "' class='btn btn-primary'>Edit</a>
                          <a href='delete_student.php?id=" . $student['id'] . "' class='btn btn-danger'>Delete</a>
                      </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>