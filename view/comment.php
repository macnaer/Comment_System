<?php
include '../model/scrollhandler.php';


session_start();

$sc = new Scroll();
$comments = $sc->comments(0);



?>

<link rel="stylesheet" href="../styles/comments.css" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="../js/scroll.js"></script>
<script type="text/javascript" src="../js/addcomments.js"></script>
<script type="text/javascript" src="../js/deletecomments.js"></script>
<script type="text/javascript" src="../js/editcomments.js"></script>

<?php 
    if(!isset($_SESSION['login']))
    {     
?>
<ul id="menu">
    <li><a href="../view/login.php" target="frame">Login</a></li>
    <li><a href="../view/register.php" target="frame">Register</a></li>
</ul>
<?php  } ?>

<?php 
    if(isset($_SESSION['login']))
    {
        
        echo "<center>";
        echo "Ваш логин: <b>".$_SESSION['login']."</b><br>";
        echo "<a href='/model/exit.php'>Logout</a>";
        echo "</center>";
        echo "<form name='add_comment' id='add_comment'  method='post' action=''>";
        echo "<p><textarea style='width:100%' name='text' rows='8' cols='85' id='commentAdd' required  ></textarea></p>";
        echo "<p><input type='submit' name='button'  value='Comment' onclick='addComment();'></p>";
        echo "</form>";  
    }
?>

    
       
        
<div id="comm">
    
  <?php foreach ($comments as $comment): ?>
    <div>
    <p name='p1' id="p1" style='width: 100%'><b><?php echo $comment['author']; ?></b><br /></p>
    <p p name='p2' id="p2"> <?php echo  $comment['comment']; ?></p>
        <?php
            if(isset($_SESSION['login']))
            {
                
                $aut = $_SESSION['login'];
                if ($aut == $comment['author'])
                {
                echo "<form>";
                echo "<button type='button' id='Edit' onclick='editComment(event, {$comment['id']} );'>Edit</button>";
                echo "<button id='Delete' onclick='deleteComment({$comment['id']});'>Delete</button>";
                echo "</form>";
                }
                
            }
        ?>
    </div>
    <?php endforeach; ?>

</div>
