
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/js/uikit-icons.min.js"></script>
</head>
<body>
    <form method="post" action="form.php">
        <div class="uk-margin uk-margin-medium-left uk-margin-xlarge-top">
            <h1>Cek Nilai</h1>
            <p>Dibawah 70 = Tidak Lulus</p>
            <input class="uk-input uk-form-width-medium uk-form-large" type="text" name="nilai" placeholder="Nilai"><br>
            <input type="submit" class="uk-button uk-button-default uk-margin-small-top">
        </div>
    </form>
    
</body>
</html>