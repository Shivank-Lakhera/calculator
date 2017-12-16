<?php

if(isset($_POST['sub']))
{
	$txt1=$_POST['n1'];
	$txt2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	
	if($oprnd=="+")
    {
        $res=$txt1+$txt2;
        echo $res;
    }
	if($oprnd=="-")
    {
        $res=$txt1-$txt2;
        echo $res;
    }
    if($oprnd=="*")
    {
        $res=$txt1*$txt2;
        echo $res;
    }
    if($oprnd=="/")
    {
        $res=$txt1/$txt2;
        echo $res;
    }
}
?>
<html>
    <form method="post" action="">
        <h2>Calculator</h2>
        <br>
        <input name="n1" value="<?php echo $txt1; ?>">
        <br>
        <input name="n2" value="<?php echo $txt2; ?>">
        <br>
        <br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="*">
        <input type="submit" name="sub" value="/">

    </form>
</html>