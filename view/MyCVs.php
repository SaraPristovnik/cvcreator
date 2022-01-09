<?php include_once __DIR__ . '/ProfileSidebar.php' ?>
<main class="container">
    <h2 class="alert alert-info mb-4 d-flex justify-content-between flex-wrap gap-2">
        <span>My curriculum vitaes</span>
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newCV">
            Add new
        </button>
    </h2>
    <section>
        <div class="mb-5">
            <div class="card mb-5">
                <ul class="list-group list-group-flush">
                    <?php foreach ($cvEntries as $entry) : ?>
                        <li class="list-group-item d-flex justify-content-between flex-wrap gap-2">
                            <a href="/?path=MyCV&id=<?= $entry->id ?>" title="Open this CV">
                                <?= $entry->title ?>
                            </a>
                            <a href="/?path=MyCVs&del=<?= $entry->id ?>" title="DELETE THIS CV !">
                                <i class="fa fa-close fa-lg fa-fw text-danger"></i>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="newCV" tabindex="-1" aria-labelledby="newCVLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="/?path=MyCVs" method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newCVLabel">New CV</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="CVTitleInput" name="CVTitleInput" class="form-control" placeholder="CV title">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <h2 class="alert alert-info mb-4">CV modules</h2>
    <section>
        <h3 class="d-flex justify-content-between flex-wrap gap-2">
            <span>Phone</span>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newPhone">
                Add new
            </button>
        </h3>
        <div class="card mb-5">
            <ul class="list-group list-group-flush">
                <?php foreach ($phoneEntries as $entry) : ?>
                    <li class="list-group-item">
                        <?= $entry->phone ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="modal fade" id="newPhone" tabindex="-1" aria-labelledby="newPhoneLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="/?path=MyCVs" method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newPhoneLabel">New phone number</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="phoneInput" name="phoneInput" class="form-control" placeholder="+386 40 123 456">
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
            <span>Email</span>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newEmail">
                Add new
            </button>
        </h3>
        <div class="card mb-5">
            <ul class="list-group list-group-flush">
                <?php foreach ($emailEntries as $entry) : ?>
                    <li class="list-group-item">
                        <?= $entry->email ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="modal fade" id="newEmail" tabindex="-1" aria-labelledby="newEmailLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="/?path=MyCVs" method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newEmailLabel">New email address</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="emailInput" name="emailInput" class="form-control" placeholder="your@email.com">
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
                <form action="/?path=MyCVs" method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newEducationLabel">New education data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="gainedTitleInput" name="gainedTitleInput" class="form-control" placeholder="Gained title">
                        <input type="text" id="establishmentTitleInput" name="establishmentTitleInput" class="form-control" placeholder="Establishment title">
                        <input type="text" id="establishmentAddressInput" name="establishmentAddressInput" class="form-control" placeholder="Establishment address">
                        <input type="text" id="establishmentUrlInput" name="establishmentUrlInput" class="form-control" placeholder="Establishment URL">
                        <input type="date" id="startedAtInput" name="startedAtInput" class="form-control" placeholder="Started at">
                        <input type="date" id="finishedAtInput" name="finishedAtInput" class="form-control" placeholder="Finished at">
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
                <form action="/?path=MyCVs" method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newLanguageLabel">New language</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <select id="languageSelect" name="languageSelect" class="form-control mb-2">
                            <?php foreach ($languageNames as $id => $name) : ?>
                                <option value="<?= $id ?>">
                                    <?= $name ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <label for="readingRatingInput">Reading comprehension</label>
                        <input type="range" min="1" max="10" id="readingRatingInput" name="readingRatingInput" class="w-100">
                        <label for="writingRatingInput">Writing comprehension</label>
                        <input type="range" min="1" max="10" id="writingRatingInput" name="writingRatingInput" class="w-100">
                        <label for="listeningRatingInput">Listening comprehension</label>
                        <input type="range" min="1" max="10" id="listeningRatingInput" name="listeningRatingInput" class="w-100">
                        <label for="speakingRatingInput">Speaking comprehension</label>
                        <input type="range" min="1" max="10" id="speakingRatingInput" name="speakingRatingInput" class="w-100">
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
            <span>LinkedIn</span>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newLinkedin">
                Add new
            </button>
        </h3>
        <div class="card mb-5">
            <ul class="list-group list-group-flush">
                <?php foreach ($linkedinEntries as $entry) : ?>
                    <li class="list-group-item">
                        <a href="https://www.linkedin.com/in/<?= $entry->profile ?>/"><?= $entry->profile ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="modal fade" id="newLinkedin" tabindex="-1" aria-labelledby="newLinkedinLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="/?path=MyCVs" method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newLinkedinLabel">New linkedin profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="linkedinInput" name="linkedinInput" class="form-control" placeholder="name-surname-123456789">
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