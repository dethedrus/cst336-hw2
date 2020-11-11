<!DOCTYPE html>
<html>
    <head>
        <title>Ye Olde Slotte Machinerarium</title>
        <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script>
        <script src="js/script.js"></script>
    </head>
    
    <body>
    <h1 class = "title">Canst thou defeat<br>
    Ye Olde Slotte Machinerarium?</h1>
    <h3 class = "instr">For matches three, a pile for gold for ye! (10x)<br>
    <em>also works for two pairs</em><br><br>
    If match only twain, less gold shall ye claim! (5x)<br></h3>
    <h2 class = "pulsate"><strong>If truly heroic be ye, match all ye see...<br>for a king's ransom! (25x)</strong></h2>
    <br>
    </body>
    
    <br>
    
    <div class = "wheels">
        <img src = "img/img3.svg" alt="big scary dragon" id = "wheel1">
        <img src = "img/img3.svg" alt="big scary dragon" id = "wheel2">
        <img src = "img/img3.svg" alt="big scary dragon" id = "wheel3">
        <img src = "img/img3.svg" alt="big scary dragon" id = "wheel4">
    </div>
    
    <br><br>
    
    <div class = "container">
        <button class = "btn">Play</button>
        <input type = "number" maxlength = "1" style = 'width: 3em' id = "bet" value = "1" min = "1" max = "9">
        <label for = "bet">Submit thy wager</label>
        <br>
        <h2 id = "Round"></h2>
        <h1 class = "win" id = "Total"></h1>
    </div>
</html>