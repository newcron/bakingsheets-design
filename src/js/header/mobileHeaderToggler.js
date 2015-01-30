var ui = require("../ui/ui");

function initialize() {
    var menu = ui.byId("header-menu-area");

    ui.byId("header-show-menu-action").on("click").fireAndConsume(function(){
        menu.class("is-visible").toggle();
    });
}


ui.afterInit(initialize);
