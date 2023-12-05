<?php
session_start();
session_destroy();
echo '<script> alert ("Anda berhasil logout"); windows.location = "index.html"</script>';


