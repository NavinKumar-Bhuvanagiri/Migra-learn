<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Player</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <style>
        body {
            background-image: url('v3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Video Player</h1>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary mb-2" onclick="playVideo('vid2.mp4')">Play Video 1</button>
                <button class="btn btn-primary mb-2" onclick="playVideo('vid2.mp4')">Play Video 2</button>
                <button class="btn btn-primary mb-2" onclick="playVideo('vid2.mp4')">Play Video 3</button>
                <button class="btn btn-primary mb-2" onclick="playVideo('vid2.mp4')">Play Video 4</button>
                <button class="btn btn-primary mb-2" onclick="playVideo('vid2.mp4')">Play Video 5</button>
            </div>
            <div class="col-md-6">
                <video id="video-player" controls>
                    <!-- Video source will be added dynamically -->
                </video>
            </div>
        </div>
    </div>

    <script>
        function playVideo(videoSrc) {
            const videoPlayer = document.getElementById('video-player');
            videoPlayer.src = videoSrc;
            videoPlayer.load();
            videoPlayer.play();
        }
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>