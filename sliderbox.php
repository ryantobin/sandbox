<?php>
// slider box
//-- a program to move a box around the window

// floating div with in inner div box that moves with the mouse when the mouse is clicked down if the mouse is clicked down over top of it

// 888888 //


// first make a box that can be dragged by the mouse
// floating div
// onMouseClick(or Down) event - box appear - centered at mouse pointer

// move mouse with pointer - keep it at the center of the pointer - redraw it each time

// box can only be moved when the mouse is over top of it

// move until mouse depressed (or up)

/*

Tracking mouse position

The mouse's position is reported on the event object received by a handler for the mousemove event, which you can attach to the window (the event bubbles):
(function() {
    window.onmousemove = handleMouseMove;
    function handleMouseMove(event) {
        event = event || window.event; // IE-ism
        // event.clientX and event.clientY contain the mouse position
    }
})();

If you really need a timer-based solution, you combine this with some state variables (live example):
(function() {
    var mousePos;

    window.onmousemove = handleMouseMove;
    setInterval(getMousePosition, 100); // setInterval repeats every X ms

    function handleMouseMove(event) {
        event = event || window.event; // IE-ism
        mousePos = {
            x: event.clientX,
            y: event.clientY
        };
    }

    function getMousePosition() {
        var pos = mousePos;
        if (!pos) {
            // We haven't seen any movement yet
        }
        else {
            // Use pos.x and pox.y
        }
    }
})();

As far as I'm aware, you can't get the mouse position without having seen an event, something which this answer to another Stack Overflow question seems to confirm.

Side note: If you're going to do something every 100ms (10 times/second), try to keep the actual processing you do in that function very, very limited. That's a lot of work for the browser, particularly older Microsoft ones. Yes, on modern computers it doesn't seem like much, but there is a lot going on in browsers... So for example, you might keep track of the last position you processed and bail from the handler immediately if the position hasn't changed.

*/