<?php
require_once 'controllers/class.php';

$obj = new Operations;
if ($_POST) {
    if (isset($_POST['create'])) {
        //Poping out the element $_POST['create'] from $_POST, To make sure that does not create a seperate field in table
        array_pop($_POST);
        $id = $obj->insert('users', $_POST);
        header("location:details.php?$id");
    }
    if (isset($_POST['login'])) {
        extract($_POST);
        //CHECKING IF EMAIL EXISTS OR NOT
        if ($obj->Validate('users', array('email' => $email))) {
            //FETCHING DETAILS OF THAT PARTICULAR USER BY MATCHING EMAIL
            $userDetails = $obj->SelectByArgs('users', array('email' => $email));
            if ($userDetails[0]['password'] == $password) {
                // echo "Email and Password";
                Session::SetSession('id', $userDetails[0]['id']);
                header("location:user.php");
            } else {
                // echo "Incorrect Password";
                header("location:login.php?status=2");
            }
        } else {
            // echo "Invalid Email";
            header("location:login.php?status=3");
        }
    }
}
