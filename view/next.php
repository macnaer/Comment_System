<?php
include '../model/scrollhandler.php';

session_start();

$sc = new Scroll();
$num = $_POST['startFrom'];

$comments = $sc->comments($num);
?>

    <?php foreach ($comments as $comment): ?>
        <p style='width: 100%'><b><?php echo $comment['author']; ?></b><br />
        <?php echo $comment['comment']; ?></p>
        <?php
            if(isset($_SESSION['login']))
            {
                $aut = $_SESSION['login'];
                if ($aut == $comment['author'])
                {
                echo "<form>";
                echo "<button id='Edit'>Edit</button>";
                echo "<button id='Delete'>Delete</button>";
                echo "</form>";
                }
            }
        ?>
    <?php endforeach; ?>
    
    

