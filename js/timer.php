<?php
// timer.php

// Get the countdown end time from the URL parameter 'end'
$end_time = isset($_GET['end']) ? $_GET['end'] : (time() + 3600);

// Set the content type to JavaScript
header('Content-Type: application/javascript');
?>

// countdown.js

// Set the date we're counting down to
var countDownDate = new Date(<?php echo $end_time; ?> * 1000).getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="countdown-timer"
    document.getElementById("countdown-timer").innerHTML =  hours + "h " +
        minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown-timer").innerHTML = "EXPIRED";
    }
}, 1000);



