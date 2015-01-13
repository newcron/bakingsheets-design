function aUiElementBasedOn(id) {
    var element = document.getElementById(id);

    if (element === null || element === undefined) {
        throw "element " + id + " can not be found";
    }



    var instance = {

        'class': function(className) {
           var classList = element.classList;

           return {
               add: function() {
                   if (!classList.contains(className)) {
                       classList.add(className);
                   }
                   return instance;
               },
               remove: function() {
                   if (classList.contains(className)) {
                       classList.remove(className);
                   }
                   return instance;
               },
               toggle: function() {
                   if(classList.contains(className)) {
                       classList.remove(className);
                   } else {
                       classList.add(className);
                   }
                   return instance;
               }
           }
        } ,



        'on': function (eventName) {
            return {
                fire: function (callback) {
                    element.addEventListener(eventName, callback);
                    return instance;
                },
                fireAndConsume: function(callback) {
                    element.addEventListener(eventName, function(e){
                        e.preventDefault();
                        callback(e);
                    });
                    return instance;
                }
            }
        }
    };

    return instance;
}

module.exports = {
    byId: function (id) {
        return aUiElementBasedOn(id);
    },
    afterInit: function (callback) {
        document.addEventListener("DOMContentLoaded", callback);
    }
};