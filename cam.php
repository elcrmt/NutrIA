<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="V/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Webcam</title>
        <style>
            .hidden {
                display: none;
            }
        </style>
    </head>
    <body>
        </br>
        <video id="video" width="640" height="480" autoplay></video></br></br>
        <button id="snap" class="inscriptionbtn">Prendre une photo</button></br></br>
        <!--quand on cree la photo -->
        <canvas id="canvas" width="640" height="480"></canvas>
        <!-- Element pour afficher la photo -->
        <img id="captured-photo" src="" alt="Captured Photo"></img>

        <script>
            // récupérer des éléments, créer des paramètres, etc.
            var video = document.getElementById('video');
            var capturedPhoto = document.getElementById('captured-photo');
            var canvas = document.getElementById('canvas');
            // Demander l'acces a la camera!
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia){
                navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
                    video.srcObject = stream;
                    video.play();
                 });
            }

            // Elements pour prendre une photo
            var context = canvas.getContext('2d');

            // declanche la photo
            document.getElementById("snap").addEventListener("click", function() {
                context.drawImage(video, 10, 10, 250, 200);
                // Mettre à jour la source de l'image avec les données du canvas
                capturedPhoto.src = canvas.toDataURL('image/png');
                // Cacher le canvas
                canvas.classList.add('hidden');
            });
        </script>
     </body>
</html>