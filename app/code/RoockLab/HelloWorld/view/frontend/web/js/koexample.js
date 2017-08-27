define(
    [
        'uiComponent',
        'ko'
    
    ], function(Component, ko) {
    
    return Component.extend({
        initialize: function () {
            this._super();
            this.sayHello = "Hello this is content populated with KO!";
            this.time = ko.observable(Date());

            setInterval(this.flush.bind(this), 1000);
        },
        flush: function(){
            this.time(Date());
        }
    });
});