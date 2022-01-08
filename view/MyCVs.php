<?php include_once __DIR__ . '/ProfileSidebar.php' ?>
<main class="container">
    <h2>CVs</h2>
    <h2>CV modules</h2>
    <section>
        <h3>Phone</h3>
        <div class="mb-3">
            <?php foreach ($phoneEntries as $entry) : ?>
                <div data-id="<?= $entry->id ?>">
                    <?= $entry->phone ?>
                </div>
            <?php endforeach ?>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPhone">
                Add new
            </button>
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
        </div>
    </section>
    <section>
        <h3>Email</h3>
        <div class="mb-3">
            <?php foreach ($emailEntries as $entry) : ?>
                <div data-id="<?= $entry->id ?>">
                    <?= $entry->email ?>
                </div>
            <?php endforeach ?>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newEmail">
                Add new
            </button>
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
        </div>
    </section>
    <section>
        <h3>Education</h3>
        <div class="mb-3">
            <?php foreach ($educationEntries as $entry) : ?>
                <div data-id="<?= $entry->id ?>">
                    <?= $entry->gained_title ?>,
                    <?= $entry->establishment_title ?>,
                    <?= $entry->establishment_address ?>,
                    <?= $entry->establishment_url ?>,
                    <?= $entry->started_at ?>,
                    <?= $entry->finished_at ?>
                </div>
            <?php endforeach ?>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newEducation">
                Add new
            </button>
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
        </div>
    </section>
    <section>
        <h3>Language</h3>
        <div class="mb-3">
            <?php foreach ($languageEntries as $entry) : ?>
                <div data-id="<?= $entry->id ?>">
                    <?= $entry->language_id ?>,
                    <?= $entry->reading_rating ?>,
                    <?= $entry->writing_rating ?>,
                    <?= $entry->listening_rating ?>,
                    <?= $entry->speaking_rating ?>
                </div>
            <?php endforeach ?>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newLanguage">
                Add new
            </button>
            <div class="modal fade" id="newLanguage" tabindex="-1" aria-labelledby="newLanguageLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="/?path=MyCVs" method="post" class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newLanguageLabel">New language levels</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" id="languageIdInput" name="languageIdInput" class="form-control" placeholder="language">
                            <input type="number" min="1" max="10" id="readingRatingInput" name="readingRatingInput" class="form-control">
                            <input type="number" min="1" max="10" id="writingRatingInput" name="writingRatingInput" class="form-control">
                            <input type="number" min="1" max="10" id="listeningRatingInput" name="listeningRatingInput" class="form-control">
                            <input type="number" min="1" max="10" id="speakingRatingInput" name="speakingRatingInput" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h3>LinkedIn</h3>
        <div class="mb-3">
            <?php foreach ($linkedinEntries as $entry) : ?>
                <div data-id="<?= $entry->id ?>">
                    <?= $entry->profile ?>
                </div>
            <?php endforeach ?>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newLinkedin">
                Add new
            </button>
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
        </div>
    </section>
</main>