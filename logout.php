<?php
include_once('controllers/sessions.php');
Session::DestroySession();
if(!Session::GetSession('userID'))
{
    header("Location: user.php");
}
