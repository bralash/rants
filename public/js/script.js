$(document).ready(function() {
    // Change hashtag colors
    $(".message").html(function(_, html) {
        return html.replace(/(\#\w+)/g, '<span class="tomato">$1</span>');
    });


    //Create slug from title
    const slugify = str => {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();
      
        // remove accents, swap ñ for n, etc
        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to   = "aaaaeeeeiiiioooouuuunc------";
        for (var i=0, l=from.length ; i<l ; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }
    
        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes
    
        return str;
    }


    //Get latest Episode from RSS
    const getLatestEpisode = () => {
        const url = window.location.origin + '/api/episodes';
        $.ajax(url, { // Get all unique guids from database. 
            success : function(rantsData) {

                const RSS_URL = `https://anchor.fm/s/37e1314c/podcast/rss`;
                $.ajax(RSS_URL, { // Get all episodes from RSS Feed
                    accepts: {
                        xml: "application/rss+xml"
                    },
        
                    dataType: "xml",
        
                    success: function(anchorData) {
                        $(anchorData).find("item")
                            .each(function() {
                                const el = $(this);
                                let anchorGuid = el.find("guid").text();

                                let result = rantsData.filter(x => x.guid === anchorGuid);

                                if(!result.length) { // Only update the episode table if the guid doesn't exist. 
                                    let momentDate = moment(el.find("pubDate").text().toString()).format('YYYY-MM-DD h:mm:ss');
                                    
                                    const data = {
                                        title : el.find("title").text(),
                                        description : el.find("itunes\\:summary").text(),
                                        img_url : el.find("itunes\\:image").attr('href'),
                                        audio_url : el.find("enclosure").attr('url'),
                                        duration : el.find("itunes\\:duration").text(),
                                        posted_on : momentDate,
                                        season : el.find("itunes\\:season").text(),
                                        episode : el.find("itunes\\:episode").text(),
                                        anchor_podcast : el.find("link").text(),
                                        slug : slugify(el.find("title").text()),
                                        guid : el.find("guid").text()
                                    }

                                    $.post(url,data, function(data, status) {
                                        console.log(`${data} and status is ${status}`)
                                        alert('Episode loaded successfully')
                                    });
                                    
                                }
                            }
                        );
                    }
                });
            }
        });
    }

    

    $('#refresh-episodes').on('click', function() {
        getLatestEpisode();
    });

    let plays = 0;

    const getNumberOfPlays = () => {
        const playButtons = $('.mejs-play button');
        for(const button of playButtons) {
            button.addEventListener('click', () => {
                let parent = button.parentElement;
                if(parent.classList.contains('mejs-play')) {
                    plays++;
                    console.log(plays);
                }
                
            });
        }
    }

    

});