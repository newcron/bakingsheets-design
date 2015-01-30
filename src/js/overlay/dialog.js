var ui = require("../ui/ui");


var isOpen = false;

function closeFunction() {
    isOpen = false;
    ui.byId("overlay").remove();
}

function openFunction() {
    if(isOpen === true) {
        closeFunction();
    }
    ui.createElement('<div class="overlay" id="overlay"><div class="overlay-dialog">foo</div></div>').appendTo(ui.body());
    isOpen = true;
}


module.exports = {
    open: openFunction,
    close: closeFunction
}