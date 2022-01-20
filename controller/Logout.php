<?php

unset($_SESSION['userId']);
session_destroy();
die(header('Location: /?path=Login'));
