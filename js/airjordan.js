/*******************************************************************************
©2023 - Flavio Ricardo
JS - Nike Air Jordan - Educational Project
Webdesign Front-end
*******************************************************************************/
// document.addEventListener("contextmenu", (event) => {
//     event.preventDefault();
// });

var thisColor = "red"
function changeImage(img) {
    console.log(img)
    let picture = document.getElementById("large")
    picture.src = "assets/shoes/" + thisColor + "-" + img + ".jpg"
}
function colorSelector(color) {
    thisColor = color
    var theImage = 1;
    while (theImage <= 8) {
        let cod = `aj${theImage}`
        thumbFile = `assets/shoes/${thisColor}-${theImage}.jpg`
        console.log(thumbFile)
        var thumb = document.getElementById(cod)
        thumb.src = thumbFile
        theImage++
    }
    changeImage(1)
}