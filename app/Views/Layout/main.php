<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= $this->include('layout/head'); ?>
    <!-- Render Css -->
    <?= $this->renderSection('css'); ?>
</head>

<body>

    <?= $this->include('layout/header'); ?>

    <div class="d-flex align-items-stretch">

        <?= $this->include('layout/sidebar'); ?>

        <div class="page-content">

            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom"><?= $title ?? '' ?></h2>
                </div>
            </div>

            <section class="no-padding-top no-padding-bottom">

                <?= $this->renderSection('content'); ?>

            </section>
        </div>

        <?= $this->include('layout/footer'); ?>

    </div>

    <?= $this->include('layout/script'); ?>
    <!-- Render Js -->
    <?= $this->renderSection('js') ?>
</body>

</html>