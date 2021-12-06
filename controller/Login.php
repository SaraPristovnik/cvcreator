<?php

if (isset($_SESSION['userId']))
    die(header('Location: /?path=Profile'));

