<!DOCTYPE html>
<html class="no-js" lang="en">

<?php echo $page["head"]; ?>

<style type="text/css">
    <?php if(isset($css)){ echo $css; } ?>
</style>

<body>

<?php echo $page["preloader"]; ?>

<main>
<?php echo $page["header"]; ?>
                <?php echo $content; ?>
</main>
                <?php echo $page["footer"]; ?>

                <?php echo $page['main_js'];?>
                <script type="text/javascript">
                    <?php if(isset($javascript)){ echo $javascript; } ?>
                </script>

</body>
</html>