<?php require VIEWS . '/inc/header.php'; ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php echo $post; ?>
            </div>
            <?php require VIEWS . '/inc/sidebar.php'; ?>
        </div>
    </div>
</main>
<?php require VIEWS . '/inc/footer.php'; ?>