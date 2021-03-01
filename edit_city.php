<html>
<body>

<h1> Edit City </h1>


<?php
    include 'connect.php';
    include 'check.php';

    echo "Id_city = " . $_GET['Id_city'];

    $sqlGetcity="select*from city where Id_city='1'";
    $queryGetcity= mysqli_query($con, $sqlGetcity);
    $resultcity=mysqli_fetch_assoc($queryGetcity);
?>

    <form method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <!-- Id -->
                            <input type="hidden"  name="id" value="<?php echo $resultcity['Id_city']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name
                            <input type="text" name="name" value="<?php echo $resultcity['name_city']?>">
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <input type="submit" value="submit" name="update">
                               
                    </td>
                </tr>
                </table>    
    </form>

</body>
</html>