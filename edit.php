<div>
    <form action="" method="post">
        Worker name: <input type="text" name="worker_name" value=""> <br>
        Department:<br> <input type="radio" name="department" value="TV sets" checked>TV sets<br> 
                    <input type="radio" name="department" value="Mobile phones">Mobile phones<br> 
                    <input type="radio" name="department" value="Computers">Computers<br>    
        Amount of produced products: <input type="text" name="amount_products" value=""><br>
        <input type="submit" value="EDIT">
    </form>
</div>
<?php
if(isset($_POST['worker_name'])&& $_POST['worker_name']!=""){
    $query="SELECT * FROM salary WHERE `worker_name` ='".$_POST['worker_name']."';";
    $q=mysqli_query($_POST["link"],$query);
    $num_rows=mysqli_num_rows($q);
    if ($num_rows==0) exit("<br> Wrong worker name");}




    if(isset($_POST['worker_name'])&& isset($_POST['department'])&& isset($_POST['amount_products'])&&$_POST['worker_name']!=""&& $_POST['amount_products']!=""){
        $query="UPDATE `salary` SET `department` = '".htmlspecialchars($_POST['department'])."', `amount_products` = '".htmlspecialchars($_POST['amount_products'])."' WHERE `salary`.`worker_name` ='".$_POST['worker_name']."';";
        mysqli_query($_POST['link'],$query) or die("Fail");
        echo "<br> Succesfully edited";
    }
?>