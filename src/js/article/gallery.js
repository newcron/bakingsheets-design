var ui = require("../ui/ui.js");
var dialog = require("../overlay/dialog.js");

ui.afterInit(function(){

    ui.find().all(".wp-caption a").forEach(function(element){
        element.on("click").fireAndConsume(function(){
            var imgHref = element.attr("href").get();
            dialog.open('<img src="'+imgHref+'" class="gallery-image">');
            console.log(imgHref);
        });
    });
});
