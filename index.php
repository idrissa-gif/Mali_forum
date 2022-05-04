<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A basic HTML5 video link">
    <meta name = "viewport" content ="width = device-width">
    <title>Embed Video in HTML5</title>
    <link rel = "stylesheet" href = "css/style.css">
    <style>
        body{
            background-color: black;
        }
        @media  screen and (min-width: 320) {
            body
            {
                background-color:blue;
            }
        }
        @media  screen and (min-width: 550) {
            body
            {
                background-color:green;
            }
        }
        @media  screen and (min-width: 768) {
            body
            {
                background-color:yellow;
            }
        @media  screen and (min-width: 960) {
            body
            {
                background-color:orangered;
            }
        }
        
    </style>

</head>
<body>
    <video controls preload = "auto" loop >
        There must be some kind of problem loading this vid, are you using updated browser!
        <source src= "video/pexels.mp4" type="video/mp4">
    </video> 
    <div>
    <iframe src='https://www.youtube.com/embed/KQ21gTWU-rM' frameborder='0' allowfullscreen></iframe>
    </div>
</body>
</html>