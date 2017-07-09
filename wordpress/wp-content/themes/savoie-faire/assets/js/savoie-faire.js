jQuery("document").ready(function() {

    jQuery(".nav li a").on("mouseenter", function () {
        var $this = $(this);
        var $translation = $this.data("translation");
        
        $this.html($translation);

        //$this.fadeTo(500, 0, function () {
        //    ChangeText($this, $translation, function () {
        //        $this.fadeTo(1000, 1);
        //    });
        //});
    });

    jQuery(".nav li a").on("mouseleave", function () {
        var $this = $(this);
        var $original = $this.data("original");

        $this.html($original);

        //$this.fadeTo(500, 0, function () {
        //    ChangeText($this, $original, function () {
        //        $this.fadeTo(1000, 1);
        //    });
        //});
    });

});

function ChangeText(target, string, callback) {    
    target.html(string);

    return callback();
}