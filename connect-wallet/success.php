<?php header('koneksi.php'); ?>

<?php
include_once('header.php');
?>

<style>
body {
    background: #273c75;
}
</style>

<div class="container text-center mt-5 mx-auto p-5">
    <div class="bg bg-white p-5" style="border-radius: 50px;border:2px solid #192a56">
        <div class="text-dark">
            <img style="width: 20vw;" src="./assets/images/checklist.png" alt="checklist">
            <h3 style="font-weight: bold;" class="text-success mt-3">Congratulation! You've Got Giveaway!</h3>
            <h5>The reward will be appears in minutes!</h5>
            <p class="lh-base">
                <b>NOTED</b><br>
                You must have a minimum balance of 1 BNB in your wallet account. To be used as a transaction fee
                (100
                Gwei/Gas Fee), if you do not have a balance with this amount, the bonus will not be sent.
            </p>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>