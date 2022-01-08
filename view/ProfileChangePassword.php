<?php include_once __DIR__ . '/ProfileSidebar.php' ?>
<main class="container">
    <form action="/?path=ProfileChangePassword
    " method="post">
        <div class="mb-3">
            <label for="password" class="form-label">Old password</label>
            <input type="password" id="password" name="password" class="form-control" autocomplete="current-password" placeholder="Password" value="<?= $_POST['password'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <label for="newPassword" class="form-label">New password</label>
            <input type="password" id="newPassword" name="newPassword" class="form-control" autocomplete="new-password" min-length="8" placeholder="New password">
        </div>
        <div class="mb-3">
            <label for="repeatPassword" class="form-label">Repeat password</label>
            <input type="password" id="repeatPassword" name="repeatPassword" class="form-control" autocomplete="new-password" min-length="8" placeholder="Repeat password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php if (isset($error)) : ?>
            <div class="alert alert-warning mt-3"><?= $error ?></div>
        <?php endif ?>
        <?php if (isset($success)) : ?>
            <div class="alert alert-success mt-3"><?= $success ?></div>
        <?php endif ?>
    </form>
</main>