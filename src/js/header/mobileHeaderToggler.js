var ui = require("../ui/ui");

function initialize() {
    var menu = ui.find().byId("header-menu-area");

    ui.find().byId("header-show-menu-action").on("click").fireAndConsume(function(){
        menu.class("is-visible").toggle();
    });
}


ui.afterInit(initialize);
