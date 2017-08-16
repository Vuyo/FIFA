var images = new Array ("Naruto_0288.jpg", "Naruto_0291.jpg" ,"Naruto_0299.jpg", "naruto_hatake_kakashi_288.jpg", "naruto_uchiha.jpg","naruto_hatake_kakashi_art_105057_602x339.jpg");

var i = 0

function sunSlideShow()
{
    document.getElementById("mySlider").src = ( "images/" + images[i] );

    if (i<4)
    {
        i++;
    }

    else
        i = 0;

    setTimeout("sunSlideShow()", 4000);
}
sunSlideShow();