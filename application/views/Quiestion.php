
<?php 

echo '<div class="container jumbotron">';
for($i=1;$i<=$_SESSION["qst"];$i++)
{
    echo "<a class='btn btn-outline-primary btn-sm' href=".base_url()."Welcome?id=$i>$i</a>&nbsp;";
}
echo '<form class=".form-group" action="'.base_url().'Welcome/submit_answer" method="post">';

echo"<br>";
echo "<input type='hidden' name='id' value=$id>";
echo "<label name='quiestion'><h2>$id."."$quiestion</h2></label><br><br>";
echo "<h5>";
echo "<input class='form-check-input' type='radio' name='option' value='a'>$a<br>";
echo "<input class='form-check-input' type='radio' name='option' value='b'>$b<br>";
echo "<input class='form-check-input' type='radio' name='option' value='c'>$c<br>";
echo "<input class='form-check-input' type='radio' name='option' value='d'>$d<br><br>";
echo "</h5>";
$prev=($id-1);
if($prev==0)
    $prev=1;
//echo "<a class='btn btn-primary btn-sm' href=".base_url()."Welcome?id=$prev>Prev</a>";

echo "&nbsp;";
echo "<input class='btn btn-success btn-lg' type='submit'>";
echo "&nbsp;";
$next=($id+1);
if($next>$_SESSION["qst"])
    $next=$_SESSION["qst"];
//echo "<a class='btn btn-primary btn-sm' href=".base_url()."Welcome?id=$next>Next</a>";

?>
</form>





</div>


