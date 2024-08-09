$(document).ready(function() {
    $('.show-more').on('click', function() {
        var $text = $(this).siblings('.card-text');
        var $button = $(this);
        
        $text.slideToggle(400, function() {
            $button.text($text.is(':visible') ? 'Show Less' : 'Show More');
        });
    });

        // Sample data for total seasons and episodes
        var data = [
            { title: 'Barbie', totalSeasons: 5, totalEpisodes: 50 },
            { title: 'Doraemon',totalSeasons: 10,totalEpisodes: 100},
            { title:'shinchan',totalSeasons:4,totalEpisodes:24},
            {title:'Mr Bean', totalSeasons:3,totalEpisodes:50},
            {title:'MickeyMouse',totalSeasons:4,totalEpisodes:45},
            {title:'TomAndJerry',totalSeasons:9,totalEpisodes:80}
    
        ];
    
        // Function to populate total seasons and episodes
        function populateSeasonsAndEpisodes() {
            $('.card').each(function(index) {
                var card = $(this);
                var cardData = data[index];
                if (cardData) { // Check if cardData is defined
                    card.find('.total-seasons').text(cardData.totalSeasons);
                    card.find('.total-episodes').text(cardData.totalEpisodes);
                }
            });
        }
    
        // Initial population of total seasons and episodes
        populateSeasonsAndEpisodes();

    $('.watch').on('click',function(){
        var url = $(this).data('url');
        window.location.href=url;
    });

});
