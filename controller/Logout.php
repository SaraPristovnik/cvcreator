<?php

unset($_SESSION['userId']);
die(header('Location: /?path=Login'));
