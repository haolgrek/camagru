<?php
    echo "haha";
    include "./database.php";
    echo "haha";
    try {
        $conn = new PDO("mysql:host=$DB_DSN", $DB_USER, $DB_PASSWORD);
    echo "haha";
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "haha";
    
        $sql = "CREATE DATABASE IF NO EXISTS `$DB_NAME`";
    echo "haha";
    
        $conn->exec($sql);
    echo "haha";
    
        echo "Database successfully created<br>";
        $sql = "CREATE TABLE IF NO EXISTS PHOTOS (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        title VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP
        )";
        $conn->exec($sql);
        echo "Table Photos successfully created";
        $sql = "CREATE TABLE IF NO EXISTS USERS (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
        $conn->exec($sql);
        echo "Table Users successfully created";
    }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;

    $IMG_PATH = "./img/";
    if (!mkdir($IMG_PATH, 0777, true)) {
        die('Failure while creating image directory');
    }

//     If you need to have this software first in your PATH run:
//     echo 'export PATH="/Users/rluder/.brew/opt/openssl/bin:$PATH"' >> ~/.zshrc
  
//   For compilers to find this software you may need to set:
//       LDFLAGS:  -L/Users/rluder/.brew/opt/openssl/lib
//       CPPFLAGS: -I/Users/rluder/.brew/opt/openssl/include

?>