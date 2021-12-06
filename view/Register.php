<main class="container">
    <form action="/?path=Register" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email Address" required value="<?= $_POST['email'] ?? '' ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required value="<?= $_POST['password'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php if (isset($error['message'])) : ?>
        <div class="alert alert-info mt-3">
            <?= $error['message'] ?>
        </div>
    <?php endif ?>
</main>