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
                const epPubDate = el.find("pubDate").text();
                
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
                                        <span class="posted-in"><span class="screen-reader-text">Posted in: </span> <a href="episodes.html" rel="bookmark">Season ${epSeason}</a></span> <span class="posted-on"><span class="screen-reader-text">Posted on: </span> <a href="single-episode.html" rel="bookmark"><time class="entry-date published" datetime="2017-09-13T14:48:37+00:00">${epPubDate}</time></a></span> <span class="tags"><span class="screen-reader-text">Tagged: </span> <a rel="tag" href="#">audio</a>, <a rel="tag" href="#">goodbyes</a>, <a rel="tag" href="#">life</a></span>
                                    </div>
                                    <h2 class="entry-title"><a href="single-episode.html" rel="bookmark">A short wave goodbye for my good friend Francisco</a></h2>
                                </header>
                                <div class="entry-content">
                                    <p>Capicola jerky ham hock, pork doner jowl tail boudin strip steak rump kevin bresaola salami biltong cupim kevin tri-tip sirloin spare ribs turkey corned beef turkey cow short ribs&hellip; <a href="single-episode.html">(read more)</a></p>
                                </div>
                                <div class="entry-audio">
                                    <div class="podcast-episode">
                                        <div class="podcast-episode-player" data-episode-duration="00:41">
                                            <audio class="wp-audio-shortcode" preload="none" style="width: 100%;" controls="controls">
                                                <source src="http://html.liviucerchez.com/common/preview1.mp3" type="audio/mpeg" />
                                                <source src="http://html.liviucerchez.com/common/preview1.ogg" type="audio/ogg" />
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