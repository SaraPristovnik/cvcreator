<?php include_once __DIR__ . '/ProfileSidebar.php' ?>
<main class="container">
    <h2 class="alert alert-info mb-4"><?= $cv->title ?></h2>
    <section class="mb-5">
        <h3>Contact information</h3>
        <div class="card mb-5">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">Phone number</div>
                        <div class="col">
                            <?php foreach ($phoneEntries as $entry) : ?>
                                <div data-id="<?= $entry->id ?>">
                                    <?= $entry->phone ?>
                                </div>
                            <?php endforeach ?>
                            <div class="mt-1">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newPhone">
                                    Add new
                                </button>
                                <div class="modal fade" id="newPhone" tabindex="-1" aria-labelledby="newPhoneLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="post" class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newPhoneLabel">New phone number</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <select id="phoneSelect" name="phoneSelect" class="form-control">
                                                    <?php foreach ($phoneEntriesAll as $entry) : ?>
                                                        <option value="<?= $entry->id ?>">
                                                            <?= $entry->phone ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">Email address</div>
                        <div class="col">
                            <?php foreach ($emailEntries as $entry) : ?>
                                <div data-id="<?= $entry->id ?>">
                                    <?= $entry->email ?>
                                </div>
                            <?php endforeach ?>
                            <div class="mt-1">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newEmail">
                                    Add new
                                </button>
                                <div class="modal fade" id="newEmail" tabindex="-1" aria-labelledby="newEmailLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="post" class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newEmailLabel">New email address</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <select id="emailSelect" name="emailSelect" class="form-control">
                                                    <?php foreach ($emailEntriesAll as $entry) : ?>
                                                        <option value="<?= $entry->id ?>">
                                                            <?= $entry->email ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">LinkedIn</div>
                        <div class="col">
                            <?php foreach ($linkedinEntries as $entry) : ?>
                                <div data-id="<?= $entry->id ?>">
                                    <?= $entry->profile ?>
                                </div>
                            <?php endforeach ?>
                            <div class="mt-1">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newLinkedin">
                                    Add new
                                </button>
                                <div class="modal fade" id="newLinkedin" tabindex="-1" aria-labelledby="newLinkedinLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="post" class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newLinkedinLabel">New linkedin profile</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <select id="linkedinSelect" name="linkedinSelect" class="form-control">
                                                    <?php foreach ($linkedinEntriesAll as $entry) : ?>
                                                        <option value="<?= $entry->id ?>">
                                                            <?= $entry->profile ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section>
        <h3 class="d-flex justify-content-between flex-wrap gap-2">
            <span>Education</span>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newEducation">
                Add new
            </button>
        </h3>
        <div class="card mb-5">
            <ul class="list-group list-group-flush">
                <?php foreach ($educationEntries as $entry) : ?>
                    <li class="list-group-item">
                        <h4><?= $entry->gained_title ?></h4><br>
                        <?= $entry->establishment_title ?><br>
                        <?= $entry->establishment_address ?><br>
                        <a href="<?= $entry->establishment_url ?>">
                            <?= $entry->establishment_url ?>
                        </a><br>
                        <?= date('j. n. Y', strtotime($entry->started_at)) ?> -
                        <?= date('j. n. Y', strtotime($entry->finished_at)) ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="modal fade" id="newEducation" tabindex="-1" aria-labelledby="newEducationLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newEducationLabel">New education data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <select id="educationSelect" name="educationSelect" class="form-control">
                            <?php foreach ($educationEntriesAll as $entry) : ?>
                                <option value="<?= $entry->id ?>">
                                    <?= $entry->establishment_title ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section>
        <h3 class="d-flex justify-content-between flex-wrap gap-2">
            <span>Language</span>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newLanguage">
                Add new
            </button>
        </h3>
        <div class="card mb-5">
            <ul class="list-group list-group-flush">
                <?php foreach ($languageEntries as $entry) : ?>
                    <li class="list-group-item">
                        <h4><?= $languageNames[$entry->language_id] ?></h4>
                        <div class="row">
                            <div class="col">Reading comprehension</div>
                            <div class="col"><?= $entry->reading_rating ?> / 10</div>
                        </div>
                        <div class="row">
                            <div class="col">Writing comprehension</div>
                            <div class="col"><?= $entry->writing_rating ?> / 10</div>
                        </div>
                        <div class="row">
                            <div class="col">Listening comprehension</div>
                            <div class="col"><?= $entry->listening_rating ?> / 10</div>
                        </div>
                        <div class="row">
                            <div class="col">Speaking comprehension</div>
                            <div class="col"><?= $entry->speaking_rating ?> / 10</div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="modal fade" id="newLanguage" tabindex="-1" aria-labelledby="newLanguageLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newLanguageLabel">New language levels</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <select id="languageSelect" name="languageSelect" class="form-control">
                            <?php foreach ($languageEntriesAll as $entry) : ?>
                                <option value="<?= $entry->id ?>">
                                    <?= $languageNames[$entry->language_id] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>