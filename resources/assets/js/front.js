
$(document).ready(function(e) {
    var video_wrapper = $('.youtube-placeholder');
//  Check to see if youtube wrapper exists
    if(video_wrapper.length){
// If user clicks on the video wrapper load the video.
        $('.youtube-placeholder').on('click', function(){
            console.log('yooo', $(this).data('yt-url'));
            /* Dynamically inject the iframe on demand of the user.
             Pull the youtube url from the data attribute on the wrapper element. */
            let html = '<div class="embed-responsive embed-responsive-16by9">' +
                '<div class="youtube-video embed-responsive-item" data-src="' + $(this).data('yt-url') + '">' +
                    '<iframe class="embed-responsive-item" src="' + $(this).data('yt-url') + '" data-src="' + $(this).data('yt-url') + '" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' +
                '</div>' +
            '</div>';

            //console.log('html', html);
            $(this).hide().after(html);
        });
    }
});



