<?php
session_start();
session_destroy();
echo 'Vous êtes déconnecté. <a href="./connexion.php"> <input type="submit" name="submit" value="Login" class="btn solid" /></a>';



