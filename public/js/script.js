$(document).ready(function() {
    $(".message").html(function(_, html) {
        return html.replace(/(\#\w+)/g, '<span class="tomato">$1</span>');
    });
});