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

$cv = CVModule::where('id', $_GET['id'] ?? 0)
    ->first();

if ($cv->user_id !== $_SESSION['userId'])
    die(header('Location: /?path=MyCVs'));

if (!empty($_POST)) {

    if (isset($_POST['CVTitleInput'])) {
        Capsule::insert(
            'INSERT INTO `cv_module` (`user_id`, `title`) VALUES (?, ?)',
            [
                $_SESSION['userId'],
                $_POST['CVTitleInput'],
            ]
        );
    }

    if (isset($_POST['phoneSelect'])) {
        $tempArray = $cv->cvm_phone_ids === ''
            ? []
            : explode(',', $cv->cvm_phone_ids);
        $tempArray[] = intval($_POST['phoneSelect']);
        $cv->cvm_phone_ids = implode(',', array_unique($tempArray));
    }

    if (isset($_POST['emailSelect'])) {
        $tempArray = $cv->cvm_email_ids === ''
            ? []
            : explode(',', $cv->cvm_email_ids);
        $tempArray[] = intval($_POST['emailSelect']);
        $cv->cvm_email_ids = implode(',', array_unique($tempArray));
    }

    if (isset($_POST['linkedinSelect'])) {
        $tempArray = $cv->cvm_linkedin_ids === ''
            ? []
            : explode(',', $cv->cvm_linkedin_ids);
        $tempArray[] = intval($_POST['linkedinSelect']);
        $cv->cvm_linkedin_ids = implode(',', array_unique($tempArray));
    }

    if (isset($_POST['educationSelect'])) {
        $tempArray = $cv->cvm_education_ids === ''
            ? []
            : explode(',', $cv->cvm_education_ids);
        $tempArray[] = intval($_POST['educationSelect']);
        $cv->cvm_education_ids = implode(',', array_unique($tempArray));
    }

    if (isset($_POST['languageSelect'])) {
        $tempArray = $cv->cvm_language_ids === ''
            ? []
            : explode(',', $cv->cvm_language_ids);
        $tempArray[] = intval($_POST['languageSelect']);
        $cv->cvm_language_ids = implode(',', array_unique($tempArray));
    }

    $cv->save();
}

$phoneEntries = CVMPhone::all()
    ->where('user_id', $_SESSION['userId'])
    ->whereIn('id', array_map('intval', explode(',', $cv->cvm_phone_ids)));
$phoneEntriesAll = CVMPhone::all()->where('user_id', $_SESSION['userId']);

$emailEntries = CVMEmail::all()
    ->where('user_id', $_SESSION['userId'])
    ->whereIn('id', array_map('intval', explode(',', $cv->cvm_email_ids)));
$emailEntriesAll = CVMEmail::all()->where('user_id', $_SESSION['userId']);

$linkedinEntries = CVMLinkedin::all()
    ->where('user_id', $_SESSION['userId'])
    ->whereIn('id', array_map('intval', explode(',', $cv->cvm_linkedin_ids)));
$linkedinEntriesAll = CVMLinkedin::all()->where('user_id', $_SESSION['userId']);

$educationEntries = CVMEducation::all()
    ->where('user_id', $_SESSION['userId'])
    ->whereIn('id', array_map('intval', explode(',', $cv->cvm_education_ids)));
$educationEntriesAll = CVMEducation::all()->where('user_id', $_SESSION['userId']);

$languageEntries = CVMLanguage::all()
    ->where('user_id', $_SESSION['userId'])
    ->whereIn('id', array_map('intval', explode(',', $cv->cvm_language_ids)));
$languageEntriesAll = CVMLanguage::all()->where('user_id', $_SESSION['userId']);

$languageNames = [];
foreach (Language::all() as $language) {
    $languageNames[$language->id] = $language->name;
}
