let prod = document.getElementById('large').src
//console.log(prod.src)
getName()

function getName() {

    var filename = prod.replace(/^.*[\\\/]/, '');
    // or, try this, 
    // var filename = fullPath.split("/").pop();
    console.log(filename)


    let split = filename.split('.');
    split.pop();
    let finalName = split.join(".");
    console.log(finalName)

    let thefile = finalName.length
    console.log(thefile)
    let num = thefile - 1
    let res = finalName.slice(num);

    // // Display output
    console.log(res);
    // //document.getElementById("result").value = filename;
}

function changeImage(img) {
    console.log(img)
    let picture = document.getElementById("large")
    picture.src = "assets/shoes/" + thisColor + "-" + img + ".jpg"
}