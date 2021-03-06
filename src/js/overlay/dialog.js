var ui = require("../ui/ui");


var isOpen = false;

function closeFunction() {
    isOpen = false;
    ui.find().byId("overlay").remove();
}

function openFunction(contentHtml) {
    if(isOpen === true) {
        closeFunction();
    }
    ui.createElement('<div class="overlay" id="overlay"><div class="overlay-dialog">'+contentHtml+'</div></div>')
        .appendTo(ui.find().body());
    ui.find().byId("overlay").on("click").fireAndConsume(closeFunction);
    isOpen = true;
}


module.exports = {
    open: openFunction,
    close: closeFunction
}