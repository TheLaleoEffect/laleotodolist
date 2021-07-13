<!DOCTYPE html>
    <head>
            <title>MySideHustleWork</title>
    </head>
    <body>
        <h2>LOGIN PAGE</h2>
        <form action="<?php echo htmlspecialchars ($_SERVER ["PHP_SELF"]);?>" method="POST">
           <p> Name: <input type= "text" name="name" value=""></p>
           <p> Email: <input type="text" name="email" value=""></p>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

<?php

session_start();

echo '<br/>';

$name = $_SESSION['name'];
$email = $_SESSION['email'];

// Sessions (name and email)
if (isset($_POST['submit'])){

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];

    echo $_SESSION['name'];
    echo '<br/>';
    echo $_SESSION['email'];

}

pre_r($_POST);
    if (isset($_POST['Submit'])) {// the POST has been submitted]
        echo "name:" . $_POST['name']. '<br/>';
        echo "email:" . $_POST ['email']. '<br/>';
    }

    
function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?> 