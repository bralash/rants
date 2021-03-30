$(document).ready(function() {
    $(".message").html(function(_, html) {
        return html.replace(/(\#\w+)/g, '<span class="tomato">$1</span>');
    });

    // console.log(window.location.origin + '/api/episodes');



    const updateEpisode = () => {
        const RSS_URL = `https://anchor.fm/s/37e1314c/podcast/rss`;
        const episodesContainer = document.getElementById('ep-list');

        $.ajax(RSS_URL, {
            accepts: {
                xml: "application/rss+xml"
            },

            dataType: "xml",

            success: function(data) {
                console.log(data);
                $(data).find("item")
                .each(function() {
                    const el = $(this);
                    // console.log(el.find("guid").text());

                        const url = window.location.origin + '/api/episodes';

                        const data = {
                            title : el.find("title").text(),
                            description : el.find("itunes\\:summary").text(),
                            img_url : el.find("itunes\\:image").attr('href'),
                            audio_url : el.find("enclosure").attr('url'),
                            duration : el.find("itunes\\:duration").text(),
                            posted_on : el.find("pubDate").text().toString(),
                            season : el.find("itunes\\:season").text(),
                            episode : el.find("itunes\\:episode").text(),
                            anchor_podcast : el.find("link").text(),
                            slug : el.find("title").text(),
                            guid : el.find("guid").text()
                        }
                    
                        $.post(url,data, function(data, status) {
                            console.log(`${data} and status is ${status}`)
                        });

                    
    
                });

                
            }
        });
    }

    // updateEpisode();

    
    

});