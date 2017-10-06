<?php
    function getPosts()
    {
        $posts = array();
        $posts[0] = $_POST['username'];
        $posts[3] = $_POST['email'];
        return $posts;
    }

    if(isset($_POST['update']))
    {
        $data = getPosts();
        $updateQuery = "UPDATE tourist JOIN login ON tourist.loginID = login.loginID
                        SET tourist.email ='$data[3]' WHERE login.username = '$data[0]'";

            $updateResult = $pdo->query($updateQuery);
            
            if($updateQuery)
            {
                $updateQuery = 1;
                if($updateQuery > 0)
                {
                    ?>
                    <script type="text/javascript">
                        window.location="profile.php";
                    </script>
                    <?php
                }else{
                    echo 'Data Not Updated';
                }
            }
    }
    
?>