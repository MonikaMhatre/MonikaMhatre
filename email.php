<?php

if(isset($_POST['submit']))
{
    $FirstName = $_POST['FName']
    $LastName = $_POST['LName']
    $Email = $_POST['Email']
    $Website = $_POST['Website']
    $Message = $_POST['Message']


    if(empty($FirstName) || empty($Emai) ||empty($Message))
    {
        header('location:contact.php?error');
    }
}




?>
