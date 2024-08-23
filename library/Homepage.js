$(document).ready(function(){
    $('#pagepiling').pagepiling({
        menu: null,
        anchors: ['section1', 'section2', 'section3'],
        navigation: {
            'position': 'right',
            'tooltips': ['Section 1', 'Section 2', 'Section 3']
        },               
        
    });

    $(document).ready(function() {
        $('#result').floatText({
            interval: 1000, 
            distance: 20 
        });
    });
    
    $(document).ready(function() {
        $('#result').floatText({
            interval: 50, 
            distance: 2 
        });
    });
    
    $('#result').floatText({
        speed: 1, 
        interval: 20 
    });
});

(function($) {
    $.fn.floatText = function(options) {
        var settings = $.extend({
            // Default speed for floating effect
            speed: 1, 
            // Default interval for updating the element's position
            interval: 20 
        }, options);

        return this.each(function() {
            var $this = $(this);
            var windowWidth = $(window).width();

            function floatText() {
                // Calculate the new position
                let newPos = $this.position().left - settings.speed;

                // Reset position if the text moves out of the viewport
                if (newPos + $this.width() < 0) {
                    newPos = windowWidth;
                }

                // Set the text's left position to create a floating effect
                $this.css({ left: newPos + 'px' });
            }

            // Call the floatText function repeatedly using setInterval to create continuous animation
            setInterval(floatText, settings.interval);
        });
    };
})(jQuery);
    
    