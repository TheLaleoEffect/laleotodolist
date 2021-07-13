<!DOCTYPE html>
    <head>
            <title>MySideHustleWork</title>
    </head>
    <body>
        <h2>REGISTRATION PAGE</h2>
        <form action="<?php echo htmlspecialchars ($_SERVER ["PHP_SELF"]);?>" method="POST">
           <p> Name: <input type= "text" name="name" value=""></p>
           <p> Email: <input type="text" name="email" value=""></p>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

<?php

echo '<br/>';

// Sessions (name and email)
if (isset($_POST['submit'])){

    session_start();

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

    /// To check name 
    if (empty($_POST['name'])){
        echo 'A name is required <br/>';
    }   else {
        echo htmlspecialchars($_POST['name']);
        echo '<br/>';
    } 

     /// To check email 
     if (empty($_POST['email'])){
        echo 'An email is required <br/>';
    }   else {
        echo htmlspecialchars($_POST['email']);
        echo '<br/>';
    } 

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?> 