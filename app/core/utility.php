<?php 
namespace App\core;
class utility{
    public function checkInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }
    // message
    public function message($type, $msg){
        return "<div class='alert alert-$type' role='alert'>
                    $msg 
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";

    }
    public static function setFlash($type, $message, $action){
        $_SESSION['flash'] = [
            'type' => $type,
            'message' => $message,
            'action' => $action
        ];if(isset($_SESSION['flash'])){
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">';
            echo '<strong>' . $_SESSION['flash']['message'] . ' </strong>'.$_SESSION['flash']['action'];
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">';
            echo '<strong>' . $_SESSION['flash']['message'] . ' </strong>'.$_SESSION['flash']['action'];
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
            unset($_SESSION['flash']);
        }
    }
}
?>