<?php

    if(isset($_POST['btn btn-red']))
    {
      $UserName = $_POST['Uname'];
      $Email = $_POST['Email'];
      $Subject = $_POST['Subject'];
      $Msg = $_POST['Message'];

      if(empty($UserName) || (empty($Email) || (empty($Subject) || (empty($Message)
      {
        header('location:contact_form_2.php?error');
      }
    }

?>
