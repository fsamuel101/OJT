<?php

declare(strict_types=1);

function check_upload_errors()
{
    if (isset($_SESSION['errors_upload'])) {
        $errors = $_SESSION['errors_upload'];
        ?>
        <div style="font-size: 0.5em; padding: 5px; margin: 10px 0; border-radius: 12px;">
            <?php
            foreach ($errors as $error) {
                ?>
                <p style="color: red; font-weight: bold;"><?= $error ?></p>
                <script>
                    window.alert("Please select both cover photo and book file!");
                </script>
            <?php
            }
            ?>
        </div>
    <?php
        unset($_SESSION['errors_upload']);
    } elseif (isset($_GET["upload"]) && $_GET["upload"] == "success") {
    ?>
        <div>
            <p style="color: green; font-weight: bold; font-size:0.5em;">Succesfully added to the system</p>
        </div>
<?php
    }
}
?>
