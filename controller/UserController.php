<?php
 include '../model/DB_Manager.php';
 
    session_start();

    if(isset($_POST['reg']))
    {
        $login = htmlspecialchars(trim($_POST['login']));
        $password = htmlspecialchars(trim($_POST['password']));
        $password2 = htmlspecialchars(trim($_POST['password2']));
        
        $flag = false;
        
        if($login == "" || $password == "")
         {
            die("Fill in all the fields! <a href='/view/register.php'>Try again</a>");
            $flag = true;
            
         }
        
        if ($password != $password2)
        {
            die("Passwords do not match!");
            $flag = true;
        }
        
        if(strlen($password) < 6)
        {
            die("Password contains less than 6 characters!");
            $flag = true;
        }
        
        if(strlen($login) < 3)
        {
            die("Username contains at least 3 characters!");
            $flag = true;
        }
        
        if (!$flag)
        {
            $password = md5($password);
            $user = new DB_Manager();
            $result = $user->searchLogin($login);
            $data = mysqli_fetch_assoc($result);

             if(!empty($data['login']))
             {
                die("This login already exists!");
             }

             $user->addNewUser($login, $password);
             
             $res = $user->checkLogin($login);
             $login_data = mysqli_fetch_assoc($res);
 
             
             session_start();
 
             $_SESSION['login'] = $login_data['login'];
        }
        
        header('Location: ../view/comment.php');
        exit;
    }
    
    if(isset($_POST['log']))
    {
        $login = htmlspecialchars(trim($_POST['login']));
        $password = htmlspecialchars(trim($_POST['password']));
        
        if($login == "" || $password == "")
         {
            die("Fill in all the fields!");
         }
        
        $password = md5($password);
        $log = new DB_Manager();
        $res = $log->checkLogin($login);
        $login_data = mysqli_fetch_assoc($res);
        
         if(empty($login_data['login']))
         {
            die("This user does not exist!");
         }
         if($password != $login_data['password'])
         {
            die("Incorrect password!");
         }
         
         session_start();
 
         $_SESSION['login'] = $login_data['login'];
         
        header("location: ../view/comment.php");
        exit;
    }
    
    
     if(isset($_GET['new_comment']))
     {
     $new_comment = $_GET['new_comment'];
     $author = $_SESSION['login'];
     
     $newcom = new DB_Manager();
     $newcom->addNewComment($author, $new_comment);
     exit;
     }
     
     if(isset($_GET['del_comment']))
     {
     $del_comment = $_GET['del_comment'];
     $author = $_SESSION['login'];
     
     $delcom = new DB_Manager();
     $delcom->delComment($del_comment);
     exit;
     }
     
      if(isset($_GET['id']))
     {
         $replace_id = $_GET['id'];
     }
     
     if(isset($_GET['text']))
     {
         $replace_comment = $_GET['text']; 
     }
     
     if ($replace_comment != '' && $replace_id != '')
     {
         $replace = new DB_Manager();
         $replace->replaceComment($replace_id, $replace_comment); 
         exit;
     }

     
?>