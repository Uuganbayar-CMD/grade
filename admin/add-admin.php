<?php  include("partials/menu.php")?>
<?php  include("../../config/constants.php") ?>

 <!--Body content start here-->
 <div class="main-content">
        <div class="wrapper">
            
            <h1>Manage Admin</h1>    
            <form action="" method="POST">
                <table class="admin-add-table">
                    <tr>
                        <td>Full name:</td>
                        <td><input type="text" name="full_name" placeholder="Enter Full name"></td>
                        
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td>
                            <input type="text " name="username" placeholder="Enter username">
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td>
                            <input type="password" name="password" placeholder="Enter password">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add admin" class="submit-btn">
                        </td>
                    </tr>
                </table>
            </form>

</div>
</div>
    <!--Body content end here-->
    
    
    
    
<?php include("partials/footer.php")?>

<?php
    if(isset($_POST['submit']))
    {
            //echo "button clicked";
            //1.form-с датаг авах
            $full_name = $_POST['full_name'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            //2.sql-рүү холбогдох
            $sql = " INSERT INTO tbl_admin SET
            full_name = '$full_name',
            username = '$username',
            password = '$password'
        ";
        //3.Өгөгдлийг датабаазруу хадгалах
        //3.авсан мэдээллийг датабаазруу оруулах
    define('LOCALHOST','localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'restaurant');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

    
            $res = mysqli_query($conn, $sql) or die(mysqli_error());
        //4.Өгөгдлийг оруулснаа шалгах
        if($res == TRUE){
            //data inserted;
            echo 'data inserted';
        }else{
            //data no
            echo 'failed!!!';
        }
}
?>