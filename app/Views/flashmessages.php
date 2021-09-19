<?php if (session()->get('success')) : ?>
        <div class="alert alert-success success-message alert-message" role="alert">
            <?= session()->get('success') ?>
        </div>
    <?php endif ?>
    <!-- success message ends -->

    <!-- error message -->
    <?php if (session()->get('error')) : ?>
        <div class="alert alert-danger alert-message" role="alert">
            <?= session()->get('error') ?>
        </div>
    <?php endif ?>

    <!-- validation errors -->
    <?php if (isset($validation)) : ?>
        <div class="alert alert-danger alert-message" role="alert">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif ?>

    <!-- styling php errors class -->

    <style>
            .errors li{
            list-style-type: none;
            width: 100%;
            /* text-align: center; */
        }
        .errors ul{
            padding-bottom: 0;
            margin-bottom: 0;
        }
    </style>