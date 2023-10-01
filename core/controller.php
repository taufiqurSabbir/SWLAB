<?php
include'database.php';
class Controller extends database
{

    public function addStudent($dept, $name, $nid, $birth, $address)
    {
        $query = "INSERT INTO student(dept,name,nid,birth,address) value('$dept','$name','$nid','$birth','$address')";
        $this->data_write($query);
    }

}

?>