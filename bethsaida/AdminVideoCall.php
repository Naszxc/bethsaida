<html>

<head>
    <title>Video Call</title>
    <link rel="stylesheet" type="text/css" href="VideoCall/styles.css">
    <script src="https://unpkg.com/peerjs@1.3.1/dist/peerjs.min.js"></script>
    <script src="VideoCall/script.js"></script>
</head>

<body>
    <script>
        createRoom()
    </script>

    <h1 class="title">Video Call</h1>
    <p id="notification" hidden></p>
        <div class="entry-modal" id="entry-modal">
        <!-- <p>Create or Join Meeting</p> -->
        <input id="room-input" class="room-input">
            <!-- <div>
                <button onclick="createRoom()">Create Room</button>
                <button onclick="joinRoom()">Join Room</button>
            </div> -->
        </div>
    <div class="meet-area">
        <!-- Remote Video Element-->
        <video id="remote-video"></video>

        <!-- Local Video Element-->
        <video id="local-video"></video>
        <div class="meet-controls-bar">
            <button onclick="startScreenShare()">Screen Share</button>
        </div>
    </div>
</body>

</html>