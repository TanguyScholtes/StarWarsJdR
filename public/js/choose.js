( function () {
    "use strict";

    function select ( e ) {
        e.preventDefault();

        //get all classes of clicked element
        var clickedClass = e.target.className;
        //get second class of clicked element (has to be the same than what we wich to choose)
        var choiceClass = clickedClass.split( " " )[ 1 ];

        //We hide all results again to have just the selected result displayed (previous choices won't erase otherwise)
        var toHide = document.getElementsByClassName( "result" );
        for ( var i = 0 ; i < toHide.length ; i++ ) {
            toHide[ i ].style.display = "none";
        }

        //Display only chosen result
        var toShow = document.getElementsByClassName( choiceClass + "-choice" );
        //We use the fact there should only be 1 item in the toShow array
        toShow[ 0 ].style.display = "initial";
    }

    //Hide all results
    var toHide = document.getElementsByClassName( "result" );
    for ( var i = 0 ; i < toHide.length ; i++ ) {
        toHide[ i ].style.display = "none";
    }

    //add click listener on choices
    var choices = document.getElementsByClassName( "choice" );
    for( var i = 0 ; i < choices.length ; i++ ) {
        choices[ i ].addEventListener( "click", select, false );
    }

    //Usage :
    //Choices (elements to click to choose what to display) :
    //<a class="choice ResultA" href="#Anchor">Lorem Ipsum</a>
    //Results (elements to display after choosing) :
    //<div id="Anchor" class="result ResultA-choice"></div>

} ) ();
