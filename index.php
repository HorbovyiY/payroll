<!DOCTYPE html>

<html>
<head>
	<title>Payroll</title>
</head>
<body>
    <?php
    define("COEF", "0.15");
    define("COMP", "1500");
    define("MOBILE", "500");
    define("TV", "1000");
    define("DB_NAME", "payroll");
    define("DB_LOGIN", "root");
    define("DB_PASS", "");
    define("DB_LOCAL", "localhost");
    	$_POST["link"] = mysqli_connect(DB_LOCAL, DB_LOGIN, DB_PASS, DB_NAME) or die("Could not connect to database");// connect to DB
    	if (!isset ($_GET['page']))
    		$_GET['page']='view';
    ?>

    <div class="menu">
        <ul>
            <li><a href="index.php?page=view">View</a></li>
            <li><a href="index.php?page=create">Create</a></li>
            <li><a href="index.php?page=edit">Edit</a></li>
        </ul>
    </div>

    <div class="content">
        <?php include_once $_GET['page'].'.php' ?>

    </div>
</body>
</html>