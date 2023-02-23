<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body onload="load()">

<p class="center-text" style="font: bold 22px Aria, sans-serif;">Program Kalkulator Sederhana</p>
    <div id="calculator">
        <!-- Screen and clear key -->
        <div class="top">
            <span id="clear">C</span>
            <div id="screen"></div>
        </div>

        <div class="keys">
            <!-- operators and other keys -->
            <span>7</span>
            <span>8</span>
            <span>9</span>
            <span class="operator">+</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span class="operator">-</span>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span class="operator">÷</span>
            <span>0</span>
            <span>.</span>
            <span class="eval">=</span>
            <span class="operator">x</span>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>