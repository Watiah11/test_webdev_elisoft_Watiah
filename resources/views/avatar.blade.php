<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Avatar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .form-group {
        margin-bottom: 15px;
    }

    .form-group input {
        margin-top: 30px;
    }

    body {
        background-color: lightcyan;
    }

    #avatar-img {
        display: none;
        max-width: 200px;
        margin-top: 30px;
        border-radius: 70%; 
        background-color: #fff; 
        padding: 5px;
    }
</style>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="form-group">
                    <input class="form-control" id="name-input" placeholder="Ketik Nama Anda...">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <button type="button" class="btn btn-success form-control" onclick="createAvatar()">Buat Profile Picture!</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <img id="avatar-img" src="" alt="Avatar">
            </div>
        </div>
    </div>

    <script>
        function createAvatar() {
            var name = document.getElementById('name-input').value;
            var avatarImg = document.getElementById('avatar-img');
            avatarImg.src = 'https://robohash.org/103.174.236.65.png' + encodeURIComponent(name);
            avatarImg.style.display = 'block';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
