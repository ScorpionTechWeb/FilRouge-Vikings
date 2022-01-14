<?php 
session_start();
//import de la connexion à la bdd
include('./includes/db.php');
//import de la vue connexion/loginUserView
include('./views/loginUserView.php');
?>

<?php
$msg = ""; 
if(isset($_POST['submitBtnLogin'])) {
  $username = trim($_POST['login_user']);
  $password = trim($_POST['mdp_user']);
  if($username != "" && $password != "") {
    try {
      $query = "select * from `users` where `login_user`=:username and `mdp_user`=:password";
      $stmt = $bdd->prepare($query);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        //création des super globales Session                
                        $_SESSION['idUser'] =  $id;
                        $_SESSION['nameUser'] = $name;
                        $_SESSION['firstNameUser'] =  $fisrtName;
                        $_SESSION['loginUser'] = $login;
                        $_SESSION['mdpUser'] = $mdp;
                        $_SESSION['type_user'] = $type;
                        $_SESSION['connected'] = true;
       
      } else {
        $msg = "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}
?>