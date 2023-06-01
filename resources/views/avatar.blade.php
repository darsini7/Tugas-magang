<!DOCTYPE html>
<html>
<head>
    <title>Generate Avatar</title>
    <style>
        .container {
            text-align: center;
            margin-top: 50px;
        }
        #avatar-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Generate Avatar</h1>
        <input type="text" id="input-text" placeholder="Enter text">
        <br><br>
        <button onclick="generateAvatar()">Generate</button>
        <br><br>
        <img id="avatar-image" src="" alt="Avatar">
    </div>

    <script>
        function generateAvatar() {
            var inputText = document.getElementById("input-text").value;
            var avatarImage = document.getElementById("avatar-image");
            avatarImage.src = "https://robohash.org/" + inputText;
        }
    </script>
</body>
</html>