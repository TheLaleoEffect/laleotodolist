<?php 
$host = 'localhost';
$user = 'root';
$password = '123456';
$dbname = 'todo_list';

// Set DSN
$dsn = 'mysql:host='. $host .';dbname='. $dbname;

// Create a PDO instance
$pdo = new PDO ($dsn, $user);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
PDO::FETCH_OBJ);


# PRDO QUERY

$stmt = $pdo->query('SELECT * FROM todos');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['names'] . '<br/>';
}


// User Input
$dayee = 'wednesday';


// Positional Parameters
$sql = 'SELECT * FROM todos WHERE dayee = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$dayee]);
$todos = $stmt->fetchALL();

echo '<br>';

var_dump($todos);
foreach($todos as $todo){
    echo $todo->names . '<br>';
}


// 1. See all my Task created in Array Format
// Named Parameters
$sql = 'SELECT * FROM todos WHERE dayee = :dayee';
$stmt = $pdo->prepare($sql);
$stmt->execute(['dayee' => $dayee]);
$todos = $stmt->fetchALL();

echo '<br>';

//var_dump($todos);
foreach($todos as $todo){
    echo $todo->names . '<br>';
}


// 2. INSERT DATA using the defined variables below as example ( I deliberately put this whole code section as a comment so that multiple insertions will not occur until you decide to remove the // from this code section to test the insertion)
// $names = 'go to market';
// $dayee = 'thursday';

// $sql = 'INSERT INTO todos(names, dayee) VALUES(:names, :dayee)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['names' => $names, 'dayee' => $dayee]);

// echo 'Post Added';


// 3. UPDATE DATA using id of todo1 as example 
// $id = 1;
// $dayee = 'friday';

// $sql = 'UPDATE todos SET dayee = :dayee WHERE id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['dayee' => $dayee, 'id' => $id]);

// echo 'Post Updated';


// 4. DELETE DATA using id of todo1 as example 
$id = 12;

$sql = 'DELETE FROM todos WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

echo '<br>';

echo 'Post Added';
echo '<br>';

echo 'Post Updated';
echo '<br>';

echo 'Post Deleted';

?>