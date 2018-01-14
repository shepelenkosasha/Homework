<?php
session_start();
echo '<h1>'.'Привет,' . ' ' . $_SESSION['username'] . '!'.'</h1>';