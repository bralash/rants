$(document).ready(function() {
    $(".message").html(function(_, html) {
        return html.replace(/(\#\w+)/g, '<span class="tomato">$1</span>');
    });

    


    // const RSS_URL = `https://anchor.fm/s/37e1314c/podcast/rss`;

    // fetch(RSS_URL)
    // .then(response => response.text())
    // .then(str => new window.DOMParser().parseFromString(str, "text/xml"))
    // .then(data => {
    //     console.log(data.querySelectorAll("item")[0]['childNodes'][21]['attributes'][0]['nodeValue'])

    //     const items = data.querySelectorAll("item");
    //     let html = ``;
    //     items.forEach(el => {
    //         console.log(el.querySelectorAll("item"));
    //         html += `
    //             <article>
    //                 <img src="${el.querySelector("link").innerHTML}/image/large.png" alt="">
    //             </article>
    //         `;
    //     });
    //     document.body.insertAdjacentHTML("beforeend", html);
    // });


    const RSS_URL = `https://anchor.fm/s/37e1314c/podcast/rss`;
    const episodesContainer = document.getElementById('ep-list');

    $.ajax(RSS_URL, {
        accepts: {
            xml: "application/rss+xml"
        },

        dataType: "xml",

        success: function(data) {
            // console.log(data);
            $(data).find("item")
            .each(function() {
                const el = $(this);

                // console.log(el.find("itunes\\:image").attr('href'));

                const epImage = el.find("itunes\\:image").attr('href');
                const epSeason = el.find("itunes\\:season").text();
                const epEpisode = el.find("itunes\\:episode").text();
                const epPubDate = el.find("pubDate").text().toString();
                const epTitle = el.find("title").text();
                const epDesc = el.find("itunes\\:summary").text();
                const epAudio = el.find("enclosure").attr('url');
                
                
                const template = `
                    


                    <article class="entry entry-episode">
                        <div class="row align-items-lg-center">
                            <div class="col-12 col-md-4 col-xl-3">
                                <div class="entry-media entry-image multiply-effect">
                                    <a href="single-episode.html">
                                        <img class="first" src="${epImage}" width="736" height="736" alt="">
                                        <span class="second"><img src="${epImage}" width="736" height="736" alt=""></span>
                                        <span class="third"><img src="${epImage}" width="736" height="736" alt=""></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 col-xl-9">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-in"><span class="screen-reader-text">Posted in: </span> <a href="episodes.html" rel="bookmark">Season ${epSeason}</a></span>  <span class="posted-on"><span class="screen-reader-text">Posted in: </span> <a href="episodes.html" rel="bookmark">Episode ${epEpisode}</a></span>  <span class="posted-on"><span class="screen-reader-text">Posted on: </span> <a href="single-episode.html" rel="bookmark"><time class="entry-date published" datetime="2017-09-13T14:48:37+00:00">${epPubDate.substr(0,16)}</time></a></span>
                                    </div>
                                    <h2 class="entry-title"><a href="single-episode.html" rel="bookmark">${epTitle}</a></h2>
                                </header>
                                <div class="entry-content">
                                    ${epDesc.toString().substr(0,250)} &hellip; <a href="{{URL::to('episode/')}}">(read more)</a>
                                </div>
                                <div class="entry-audio">
                                    <div class="podcast-episode">
                                        <div class="podcast-episode-player" data-episode-duration="00:41">
                                            <audio class="wp-audio-shortcode" preload="auto" style="width: 100%;" controls="controls">
                                                <source src="${epAudio}" type="audio/mp3" />
                                                
                                            </audio>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                `;
                episodesContainer.insertAdjacentHTML("beforeend",template)
            });
        }
    });
});