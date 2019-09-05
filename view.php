<div>
    <form action="" method="post">
        Sort by: <input type="radio" name="sort" value="amount_products">Amount of products &nbsp; 
        <input type="radio" name="sort" value="salary">Salary &nbsp;
        <input type="radio" name="sort" value="department">Departments<br>    
        <table border="0">
            <tr>
                <td><input type="text" value="Worker name"></td>
                <td><input type="text" value="Department"></td>
                <td><input type="text" value="Amount of produced products"></td>
                <td><input type="text" value="Salary"></td>
            </tr>
            <?php
                if(isset($_POST['sort'])){
                    $sort=$_POST['sort'];
                }else $sort='id';
                $query="SELECT * FROM salary ORDER BY ".$sort." DESC";
                $q=mysqli_query($_POST["link"],$query);
                while($res=mysqli_fetch_assoc($q)){?>
                    <tr>
                        <td><input type="text" value="<?php echo $res['worker_name']?>"></td>
                        <td><input type="text" value="<?php echo $res['department']?>"></td>
                        <td><input type="text" value="<?php echo $res['amount_products']?>"></td>
                        <td><input type="text" value="<?php echo $res['salary']?>"></td> 
                    </tr>
            <?php    }
            ?>
        </table>
        <input type="submit" value="GO!">
    </form>
</div>