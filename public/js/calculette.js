( function () {
    "use strict";

    //abilities as used in classes. Order matters
    var abilities = [
        "strength",
        "dexterity",
        "constitution",
        "intel",
        "wisdom",
        "charisma"
    ];

    //Invested points in abilities
    var addedPoints = 0;

    //final abilities values. Same order as var abilities
    var values = [
        8,
        8,
        8,
        8,
        8,
        8
    ];


    //add click listener on increaser
    for( var i = 0; i < abilities.length; i++ ) {
        var increasers = document.getElementsByClassName( abilities[ i ] + "Increase" )[0];
        increasers.addEventListener( "click", increaseValues, false );
    }
    //add click listener on decreaser
    for( var i = 0; i < abilities.length; i++ ) {
        var decreasers = document.getElementsByClassName( abilities[ i ] + "Decrease" )[0];
        decreasers.addEventListener( "click", decreaseValues, false );
    }

    function increaseValues ( event ) {
        event.preventDefault();
        var clickedClass = event.target.className.split( " " )[ 0 ]; //get first class of clicked button, ie "strengthIncrease"
        switch ( clickedClass ) {
            case "strengthIncrease":
                if ( values[0] < 18 ) {
                    values[0] += 1;

                    if( values[0] >= 8 && values[0] <= 14 ) {
                        addedPoints += 1;
                    }
                    if ( values[0] > 14 && values[0] <= 16 ) {
                        addedPoints += 2;
                    }
                    if ( values[0] > 16 && values[0] <= 18 ) {
                        addedPoints += 3;
                    }
                }
                break;

            case "dexterityIncrease":
                if ( values[1] < 18 ) {
                    values[1] += 1;

                    if( values[1] >= 8 && values[1] <= 14 ) {
                        addedPoints += 1;
                    }
                    if ( values[1] > 14 && values[1] <= 16 ) {
                        addedPoints += 2;
                    }
                    if ( values[1] > 16 && values[1] <= 18 ) {
                        addedPoints += 3;
                    }
                }
                break;

            case "constitutionIncrease":
                if ( values[2] < 18 ) {
                    values[2] += 1;

                    if( values[2] >= 8 && values[2] <= 14 ) {
                        addedPoints += 1;
                    }
                    if ( values[2] > 14 && values[2] <= 16 ) {
                        addedPoints += 2;
                    }
                    if ( values[2] > 16 && values[2] <= 18 ) {
                        addedPoints += 3;
                    }
                }
                break;

            case "intelIncrease":
                if ( values[3] < 18 ) {
                    values[3] += 1;

                    if( values[3] >= 8 && values[3] <= 14 ) {
                        addedPoints += 1;
                    }
                    if ( values[3] > 14 && values[3] <= 16 ) {
                        addedPoints += 2;
                    }
                    if ( values[3] > 16 && values[3] <= 18 ) {
                        addedPoints += 3;
                    }
                }
                break;

            case "wisdomIncrease":
                if ( values[4] < 18 ) {
                    values[4] += 1;

                    if( values[4] >= 8 && values[4] <= 14 ) {
                        addedPoints += 1;
                    }
                    if ( values[4] > 14 && values[4] <= 16 ) {
                        addedPoints += 2;
                    }
                    if ( values[4] > 16 && values[4] <= 18 ) {
                        addedPoints += 3;
                    }
                }
                break;

            case "charismaIncrease":
                if ( values[5] < 18 ) {
                    values[5] += 1;

                    if( values[5] >= 8 && values[5] <= 14 ) {
                        addedPoints += 1;
                    }
                    if ( values[5] > 14 && values[5] <= 16 ) {
                        addedPoints += 2;
                    }
                    if ( values[5] > 16 && values[5] <= 18 ) {
                        addedPoints += 3;
                    }
                }
                break;
        }
        write();
    }

    function decreaseValues ( event ) {
        event.preventDefault();
        var clickedClass = event.target.className.split( " " )[ 0 ]; //get first class of clicked button, ie "strengthDecrease"
        switch ( clickedClass ) {
            case "strengthDecrease":
                if ( values[0] > 8 ) {
                    values[0] -= 1;

                    if ( values[0] < 14 && values[0] >= 8 ) {
                        addedPoints -= 1;
                    }
                    if ( values[0] < 16 && values[0] >= 14 ) {
                        addedPoints -= 2;
                    }
                    if ( values[0] >= 16 ) {
                        addedPoints -= 3;
                    }
                }
                break;

            case "dexterityDecrease":
                if ( values[1] > 8 ) {
                    values[1] -= 1;

                    if ( values[1] < 14 && values[1] >= 8 ) {
                        addedPoints -= 1;
                    }
                    if ( values[1] < 16 && values[1] >= 14 ) {
                        addedPoints -= 2;
                    }
                    if ( values[1] >= 16 ) {
                        addedPoints -= 3;
                    }
                }
                break;

            case "constitutionDecrease":
                if ( values[2] > 8 ) {
                    values[2] -= 1;

                    if ( values[2] < 14 && values[2] >= 8 ) {
                        addedPoints -= 1;
                    }
                    if ( values[2] < 16 && values[2] >= 14 ) {
                        addedPoints -= 2;
                    }
                    if ( values[2] >= 16 ) {
                        addedPoints -= 3;
                    }
                }
                break;

            case "intelDecrease":
                if ( values[3] > 8 ) {
                    values[3] -= 1;

                    if ( values[3] < 14 && values[3] >= 8 ) {
                        addedPoints -= 1;
                    }
                    if ( values[3] < 16 && values[3] >= 14 ) {
                        addedPoints -= 2;
                    }
                    if ( values[3] >= 16 ) {
                        addedPoints -= 3;
                    }
                }
                break;

            case "wisdomDecrease":
                if ( values[4] > 8 ) {
                    values[4] -= 1;

                    if ( values[4] < 14 && values[4] >= 8 ) {
                        addedPoints -= 1;
                    }
                    if ( values[4] < 16 && values[4] >= 14 ) {
                        addedPoints -= 2;
                    }
                    if ( values[4] >= 16 ) {
                        addedPoints -= 3;
                    }
                }
                break;

            case "charismaDecrease":
                if ( values[5] > 8 ) {
                    values[5] -= 1;

                    if ( values[5] < 14 && values[5] >= 8 ) {
                        addedPoints -= 1;
                    }
                    if ( values[5] < 16 && values[5] >= 14 ) {
                        addedPoints -= 2;
                    }
                    if ( values[5] >= 16 ) {
                        addedPoints -= 3;
                    }
                }
                break;
        }
        write();
    }

    function writeBases () {
        //Set bases abilities to 8
        for( var i = 0; i < abilities.length; i++ ) {
            var setBases = document.getElementsByClassName( abilities[ i ] + "Base" );
            setBases[0].innerHTML = 8;
        }
    }

    function writeValues () {
        for( var i = 0; i < abilities.length; i++ ) {
            var setValues = document.getElementsByClassName( abilities[ i ] + "Value" );
            setValues[0].innerHTML = ( values[ i ] ) + " (" + Math.floor( values[ i ] / 2 - 5 ) + ")";
        }
    }

    function writeDecreaseCost () {
        for( var i = 0; i < abilities.length; i++ ) {
            var setCost = document.getElementsByClassName( abilities[ i ] + "DecreaseGain" )[0];
            if ( values[i] <= 8) {
                setCost.innerHTML = "NA";
            }
            if ( values[i] <= 14 && values[i] > 8 ) {
                setCost.innerHTML = "1";
            }
            if ( values[i] <= 16 && values[i] > 14 ) {
                setCost.innerHTML = "2";
            }
            if ( values[i] >= 17 ) {
                setCost.innerHTML = "3";
            }
        }
    }

    function writeIncreaseCost () {
        for( var i = 0; i < abilities.length; i++ ) {
            var setCost = document.getElementsByClassName( abilities[ i ] + "IncreaseCost" )[0];
            if( values[i] >= 8 && values[i] < 14 ) {
                setCost.innerHTML = 1;
            }
            if ( values[i] >= 14 && values[i] < 16 ) {
                setCost.innerHTML = 2;
            }
            if ( values[i] >= 16 && values[i] < 18 ) {
                setCost.innerHTML = 3;
            }
            if ( values[i] >= 18) {
                setCost.innerHTML = "NA";
            }
        }
    }

    function writeTotalCost () {
        var setTotalCost = document.getElementsByClassName( "totalCost" );
        setTotalCost[0].innerHTML = addedPoints;
    }

    function write () {
        //write everything in html

        //write abilities' bases
        writeBases();

        //write abilities values
        writeValues();

        //write increase cost
        writeIncreaseCost();

        //write decrease cost
        writeDecreaseCost();

        //write total cost
        writeTotalCost();
    }

    write();
} ) ();
