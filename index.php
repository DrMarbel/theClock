<?php
/**
    Developer: Dr. Marbel
    Start Date: 11.06.24
 */

// Get the current time
$currentTime = date("H:i:s");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Real-time Clock</title>
    </head>
    <body>
        <div id="welcome">
            
        </div>
        <div id="clock"></div>

        <script>
            function displayTime() {
                var currentTime = new Date();
                var hours = currentTime.getHours();
                var minutes = currentTime.getMinutes();
                var seconds = currentTime.getSeconds();

                // Add leading zeros if necessary
                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                var formattedTime = hours + ":" + minutes + ":" + seconds;
                document.getElementById("clock").textContent = formattedTime;
            }

            // Update the time every second
            setInterval(displayTime, 1000);
        </script>
    </body>
</html>
