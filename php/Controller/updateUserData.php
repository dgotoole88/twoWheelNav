<?php
    include '../Model/connectDB.php';

    function getPosts()
    {
        $posts = array();
        $posts[0] = $_POST['username'];
        $posts[1] = $_POST['email'];
        return $posts;
    }

    if(isset($_POST['email']))
    {
        $data = getPosts();
        $updateQuery = "UPDATE tourist JOIN login ON tourist.loginID = login.loginID
                        SET tourist.email ='$data[1]' WHERE login.username = '$data[0]'";

            $updateResult = $pdo->query($updateQuery);
            
            if($updateQuery)
            {
                $updateQuery = 1;
                if($updateQuery > 0)
                {
                    ?>
                    <script type="text/javascript">
                        window.location="../View/profile.php";
                    </script>
                    <?php
                }else{
                    echo 'Data Not Updated';
                }
            }
    }
    
?>