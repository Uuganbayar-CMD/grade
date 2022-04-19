<?php  include("partials/menu.php")?>

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
