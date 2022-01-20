<main class="container">
    <form action="/?path=Login" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email address" value="<?= $_POST['email'] ?? '' ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?= $_POST['password'] ?? '' ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="/?path=Register">Register</a>
    </form>
    <?php if (isset($error['message'])) : ?>
        <div class="alert alert-info mt-3">
            <?= $error['message'] ?>
        </div>
    <?php endif ?>
</main>
