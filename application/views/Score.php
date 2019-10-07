<div class="container jumbotron">
<?php echo "<h3>your Score is ".$_SESSION["score"]."</h3>";
 echo "<h1>Thank you   ". $_SESSION['user'];
?>
    <a class="btn btn-primary btn-lg" href="<?php echo base_url();?>Login">Exit</a></h1>
<?php       
unset($_SESSION["user"]);
unset ($_SESSION["score"]);
for($i=1;$i<=$_SESSION["qst"];$i++)
{
    $ans="ans".$i;
    unset($_SESSION[$ans]);
}
session_destroy();
?>
</div>
