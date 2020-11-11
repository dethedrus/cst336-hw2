$(document).ready(function()
/* global $ */
/* global _ */
{
    // Global Variables
    var totalWin = 0;
    var roundWin = 0;

    // Listener
    $("button").on("click", spinWheels);

    
    function spinWheels()
    {
        let numWheels = 4;

        let w1 = Math.floor(Math.random() * numWheels) + 1;
        let w2 = Math.floor(Math.random() * numWheels) + 1;
        let w3 = Math.floor(Math.random() * numWheels) + 1;
        let w4 = Math.floor(Math.random() * numWheels) + 1;
    
        document.getElementById("wheel1").src = `img/img${w1}.svg`;
        document.getElementById("wheel2").src = `img/img${w2}.svg`;
        document.getElementById("wheel3").src = `img/img${w3}.svg`;
        document.getElementById("wheel4").src = `img/img${w4}.svg`;
    
        result([w1, w2, w3, w4]);
    }

    function result(spin = [])
    {
        let uniques = _.uniq(spin).length
        
        if (uniques == 1)
        {
            roundWin = 500;
            announce(roundWin);
        }
        else if (uniques == 2)
        {
            roundWin = 100;
            announce(roundWin);
        }
        else if (uniques == 3)
        {
            roundWin = 25;
            announce(roundWin);
        }
        else
        {
            $('#Round').html(`Ye have won... NOTHING!`);
        }
    }
    
    function announce(win)
    {
        totalWin += win;
        $('#Round').html(`Ye have won ${win} gold!`);
        $('#Total').html(`Thy total winnings are ${totalWin} gold!`);
    }
});