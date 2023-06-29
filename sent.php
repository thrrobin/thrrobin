<?php
    $Login = $_POST['Login'];
    $LastName = $_POST['LastName'];
    $Password = $_POST['Password'];
    $Data = $_POST['Data'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    

    $conn = mysqli_connect("localhost", "root", "", "bd_name");
    if ($conn === false) {
      die("Ошибка: " . mysqli_connect_error());
    } 
    //echo "Подключение успешно установлено";

    $LastName = mysqli_real_escape_string($conn, $_POST["LastName"]);
    $Password = mysqli_real_escape_string($conn, $_POST["Password"]);
    $Data = mysqli_real_escape_string($conn, $_POST["Data"]);
    $Number = mysqli_real_escape_string($conn, $_POST["Number"]);
    $Email = mysqli_real_escape_string($conn, $_POST["Email"]);

    $sql = " INSERT INTO users (LastName, Password, Data, Number, Email) VALUES ( '$LastName', '$Password', '$Data', $Number, '$Email' ) ";
    if(mysqli_query($conn, $sql)){
        echo 'Данные добавлены';
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }

    $sql = "SELECT LastName, Password, Data, Number, Email FROM users WHERE LastName LIKE('$LastName') AND Password LIKE('$Password')";
    $result = $conn->query($sql);
    if($result = $conn->query($sql)){
        $rowsCount = $result->num_rows; 
        echo "<table>
                <tr> 
                    <th>Фамилия</th>
                    <th>Пароль</th>
                    <th>Дата</th>
                    <th>Номер</th>
                    <th>Email</th>
                </tr>";
        foreach($result as $row){
            echo "<tr>";
                echo "<td>" . $row["LastName"] . "</td>";
                echo "<td>" . $row["Password"] . "</td>";
                echo "<td>" . $row["Data"] . "</td>";
                echo "<td>" . $row["Number"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else{
        echo "Ошибка: " . $conn->error;
    }

    mysqli_close($conn);



?>