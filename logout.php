<?php
session_start();
session_destroy();
header('location: ../web_penyewaan/profil/index.php');