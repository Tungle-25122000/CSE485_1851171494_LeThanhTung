<?php
// for admin
function getAllUsers()
{
    global $conn;
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);
    $users = mysqli_fetch_all($result);
    return $users;
}
// for admin
function getOneUser($id)
{
    global $conn;
    $sql = "SELECT * FROM posts WHERE userid = '$id'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}
// for admin
// function deleteUser($Email)
// {
//     global $conn;
//     $sql = "DELETE FROM `users` WHERE Email = '$Email'";
//     if (mysqli_query($conn, $sql))
//         return TRUE;
//     else
//         return FALSE;
// }
// for admin
// function editUser($FullName, $Email, $Password)
// {
//     global $conn;
//     $sql = "UPDATE `users` SET `FullName` ='$FullName', `Email`='$Email',`Password`='$Password' where `Email` = '$Email' ";
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//         echo "Sua thanh cong.";
//         header("Location: ../../admin/index.php");
//         exit();
//     } else {
//         echo "Sua that bai.";
//     }
// }
