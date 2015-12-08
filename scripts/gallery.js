/*
*
*   This script manages the gallery thumbnail scroll
*   and click actions
*
*/

var LAYER_TRANS_SPEED = 300;    // overlay transition speed
var IMAGE_COUNT = 20;

$(document).ready(function() {

    var indice = [1, 2, 3, 4];
    var thumbnails = $('#thumbnails');

    var scrollThumbnails = function(direction) {

        var deleteImageIndex = direction ? indice[0] : indice[3];
        var newImageIndex = direction ? indice[3] + 1 : indice[0] - 1;

        if (newImageIndex < 1)
            newImageIndex = 20;
        if (newImageIndex > 20)
            newImageIndex = 1;

        var imageId = "sample" + newImageIndex;
        var imageSrc = "images/gallery/" + imageId + ".jpg";
        var imageAlt = imageId + " Thumbnail";
        
        var img = $('<img />', { 
            src: imageSrc,
            alt: imageAlt
        });

        var thumbnail = $('<div />', {
            id:imageId,
            class:"thumbnail"
        });
        
        thumbnail.append(img);
        thumbnail.click(switchMainImage);
        $("#sample" + deleteImageIndex).remove();

        if (direction) {
            thumbnails.append(thumbnail);
            indice.shift();
            indice.push(newImageIndex);
        } else {
            thumbnails.prepend(thumbnail);
            indice.pop();
            indice.unshift(newImageIndex);
        }

    };

    $('#leftThumb').click(function() {
        scrollThumbnails(true);
    });

    $('#rightThumb').click(function() {
        scrollThumbnails(false);
    });

    var switchMainImage = function() {
        var mainImageUrl = "images/gallery/" + this.id + ".jpg";
        $("#mainSection img").attr('src', mainImageUrl);
    }

    $('.thumbnail').click(switchMainImage);
});