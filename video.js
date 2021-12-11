const videoslides=document.querySelectorAll(".running-video .slides"); //I did not get why he added running video before

//Here, we define how long one video lasts before it moves to the next

const videolapse = 3000;
// To keep track of currently displayed image

let videocounter = 0;

//Displaying the first video

//Instead of this, it becomes imediatelly below videoslides[videocounter].style.display = "block";
videoslides[videocounter].style.opacity = 1;


//Moving to the next image when time is up

setInterval(nextImage, videolapse);

function nextImage() {
    //videoslides[videocounter].style.display = "none";
    videoslides[videocounter].style.opacity = 0;
    videocounter=(videocounter+1) % videoslides.length; //The modulo aspect allows the slideshow to be repeated cyclically
   //videoslides[videocounter].style.display = "block"; //Displays the new current image
   videoslides[videocounter].style.opacity= 1;
}

