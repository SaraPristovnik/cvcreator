<main class="container">
    <form action="/?path=Profile" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email address" value="<?= $user->email ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" id="birthday" name="birthday" class="form-control" placeholder="Birthday" value="<?= $user->birthday ?>">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" id="gender" name="gender" class="form-control" placeholder="gender" value="<?= $user->gender ?>">
        </div>
        <div class="mb-3">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" id="nationality" name="nationality" class="form-control" placeholder="Nationality" value="<?= $user->nationality ?>">
        </div>
        <div class="mb-3">
            <label for="address_street" class="form-label">Street Address</label>
            <input type="text" id="address_street" name="address_street" class="form-control" placeholder="Street Address" value="<?= $user->address_street ?>">
        </div>
        <div class="mb-3">
            <input type="text" id="address_additional" name="address_additional" class="form-control" placeholder="Additional info" value="<?= $user->address_additional ?>">
        </div>
        <div class="mb-3">
            <label for="address_postal_code" class="form-label">Postal Code</label>
            <input type="text" id="address_postal_code" name="address_postal_code" class="form-control" placeholder="Postal Code" value="<?= $user->address_postal ?>">
        </div>
        <div class="mb-3">
            <label for="address_city" class="form-label">City</label>
            <input type="text" id="address_city" name="address_city" class="form-control" placeholder="City" value="<?= $user->address_city ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>