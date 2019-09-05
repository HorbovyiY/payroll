<div>
    <form action="" method="post" onsubmit="return validate();">
        Worker name: <input type="text" name="worker_name" value=""> <br>
        Department:<br> <input type="radio" name="department" value="TV sets" checked>TV sets<br> 
                    <input type="radio" name="department" value="Mobile phones">Mobile phones<br> 
                    <input type="radio" name="department" value="Computers">Computers<br>    
        Amount of produced products: <input type="text" name="amount_products" value=""><br>
        <input type="submit" value="ADD">
    </form>
</div>
<?php
    if(isset($_POST['worker_name'])&& isset($_POST['department'])&& isset($_POST['amount_products'])&&$_POST['worker_name']!=""&& $_POST['amount_products']!=""){
        switch ($_POST['department']) {
                                                    case 'Computers':
                                                        $cost=COMP;
                                                        break;
                                                    case 'Mobile phones':
                                                        $cost=MOBILE;
                                                        break;
                                                    case 'TV sets':
                                                        $cost=TV;
                                                        break;
                                                    }
                                                    $salary=$cost*$_POST['amount_products']*COEF;
                                                    
        $query="INSERT INTO `salary` (`worker_name`, `department`, `amount_products`, `salary`) VALUES ('".htmlspecialchars($_POST['worker_name'])."', '".htmlspecialchars($_POST['department'])."', '".htmlspecialchars($_POST['amount_products'])."', '".$salary."');";
        mysqli_query($_POST['link'],$query) or die("Fail");
        echo "<br> Succesfully added";
    }
?>

<script type="text/javascript">
function validate(){

        const coef=0.15;
        let cost;
        let amount=document.getElementsByName('amount_products')[0].value;
        let value=document.querySelector('input[name="department"]:checked').value;
            switch(value) {
              case 'TV sets':  
                cost=1000;
                break;

              case 'Mobile phones':  
                cost=500;
                break;

              case 'Computers':
                cost=1500;
            }

        let salary = coef*cost*amount

            if (salary>1500){
                alert('Something wrong');
                return false;
            }
            return true;
    }
    </script>