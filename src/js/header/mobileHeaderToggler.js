var ui = require("../ui.js");

function initialize() {
    var menu = ui.byId("header-menu-area");

    ui.byId("header-show-menu-action").on("click").fireAndConsume(function(){
        menu.class("is-visible").toggle();
    });
}


ui.afterInit(initialize);
