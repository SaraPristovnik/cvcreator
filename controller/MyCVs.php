<?php

use Models\CVModule;
use Models\CVMPhone;
use Models\CVMEmail;
use Models\CVMEducation;
use Models\CVMLanguage;
use Models\CVMLinkedin;
use Models\Language;
use Illuminate\Database\Capsule\Manager as Capsule;

if (!isset($_SESSION['userId']))
    die(header('Location: /?path=Login'));

if (isset($_GET['del'])) {
    $cv = CVModule::where('id', $_GET['del'] ?? 0)
        ->first();
    $cv->forceDelete();
    die(header('Location: /?path=MyCVs'));
}

if (!empty($_POST)) {

    if (isset($_POST['CVTitleInput']))
        Capsule::insert('INSERT INTO `cv_module` (`user_id`, `title`) VALUES (?, ?)', [
            $_SESSION['userId'],
            $_POST['CVTitleInput'],
        ]);

    if (isset($_POST['phoneInput']))
        Capsule::insert('INSERT INTO `cvm_phone` (`user_id`, `phone`) VALUES (?, ?)', [
            $_SESSION['userId'],
            $_POST['phoneInput'],
        ]);

    if (isset($_POST['gainedTitleInput']))
        Capsule::insert('INSERT INTO `cvm_education` (`user_id`, `gained_title`, `establishment_title`, `establishment_address`, `establishment_url`, `started_at`, `finished_at`) VALUES (?, ?, ?, ?, ?, ?, ?)', [
            $_SESSION['userId'],
            $_POST['gainedTitleInput'],
            $_POST['establishmentTitleInput'],
            $_POST['establishmentAddressInput'],
            $_POST['establishmentUrlInput'],
            $_POST['startedAtInput'],
            $_POST['finishedAtInput'],
        ]);

    if (isset($_POST['emailInput']))
        Capsule::insert('INSERT INTO `cvm_email` (`user_id`, `email`) VALUES (?, ?)', [
            $_SESSION['userId'],
            $_POST['emailInput'],
        ]);

    if (isset($_POST['languageSelect']))
        Capsule::insert('INSERT INTO `cvm_language` (`user_id`, `language_id`, `reading_rating`, `writing_rating`, `listening_rating`, `speaking_rating`) VALUES (?, ?, ?, ?, ?, ?)', [
            $_SESSION['userId'],
            $_POST['languageSelect'],
            $_POST['readingRatingInput'],
            $_POST['writingRatingInput'],
            $_POST['listeningRatingInput'],
            $_POST['speakingRatingInput'],
        ]);

    if (isset($_POST['linkedinInput']))
        Capsule::insert('INSERT INTO `cvm_linkedin` (`user_id`, `profile`) VALUES (?, ?)', [
            $_SESSION['userId'],
            $_POST['linkedinInput'],
        ]);
}

$cvEntries = CVModule::all()->where('user_id', $_SESSION['userId']);

$phoneEntries = CVMPhone::all()->where('user_id', $_SESSION['userId']);

$emailEntries = CVMEmail::all()->where('user_id', $_SESSION['userId']);

$educationEntries = CVMEducation::all()->where('user_id', $_SESSION['userId']);

$languageEntries = CVMLanguage::all()->where('user_id', $_SESSION['userId']);

$linkedinEntries = CVMLinkedin::all()->where('user_id', $_SESSION['userId']);

$languageNames = [];
foreach (Language::all() as $language) {
    $languageNames[$language->id] = $language->name;
}
