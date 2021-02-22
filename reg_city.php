<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $nameCity=$_POST['nameCity'];

    $sqlinsertCity="insert into regcity(name_city)value('$nameCity')";
    mysqli_query($con, $sqlinsertCity);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome da Cidade
                        <input type="text" name="nameCity">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="login.php"> Login</a>
                    </td>
                </tr>

            </table>

            <table border='1'>
                <tr>
                    <th>
                        Name City
                    </th>
                </tr>

            <?php
            $sq="select * from regcity";
            $qu=mysqli_query($con,$sq);
            while($f=  mysqli_fetch_assoc($qu)){
                ?>
                <tr>
                    <td>
                        <?php echo $f['name_city']?>
                    </td>
                </tr>
            <?php
            }
            ?>
            </table>
    </body>
</html>
