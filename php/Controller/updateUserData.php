<?php
    header("Content-type: application/json");
    
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

        $response = array(); // Array to json encode
            
            if($updateQuery)
            {
                $response['status'] = 'Success';                // Set response status
                $response['message'] = 'This was successful';   // Set message status
            }else{
                $response['status'] = 'Error';                  // Set response status
                $response['message'] = 'This was unsuccessful'; // Set message status
            }
            echo json_encode($response);
    }
?>