<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/js/uikit-icons.min.js"></script>
</head>
<body>
<?php 
            $nilai = $_POST['nilai'];

            if ($nilai >= 74) {
                echo '<h1 class="uk-margin-xlarge-left uk-margin-xlarge-top">Lulus!</h1>';
                echo '<h3 class="uk-margin-xlarge-left">Nilai anda ',$nilai,' </h3>';
                echo '<p class="uk-margin-xlarge-left ">yey anda telah lulus chuyyy</p>';
            } else {
                echo '<h1 class="uk-margin-xlarge-left uk-margin-xlarge-top">Tidak Lulus!</h1>';
                echo '<h3 class="uk-margin-xlarge-left">Nilai anda ',$nilai,' </h3>';
                echo '<p class="uk-margin-xlarge-left">ga lulus bilek</p>';
            }
            
            
            ?>
            <form>
                <a href="index.php" class="uk-button uk-button-default uk-margin-xlarge-left uk-margin-small-top">Kembali</a>
            </form>
    
</body>
</html>

