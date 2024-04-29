<?php 
session_start();

echo '<div class="username"> Hola ' . $_SESSION['username'] . '</div>';
echo '<div class="profile-pic-container"> 
        <img src="' . $_SESSION['profile_picture'] . '" class="profile-pic" alt="Foto de perfil"> 
      </div>';
    
?>