<<<<<<< HEAD
/* slideshow */
=======

/* slideshow */

>>>>>>> Make-Reservation-Method---Asmaa-Mahmoud
let gallery=["card1","card2","card3","card4","card5","card6","card7","card8","card9"];
let j=2;
function galleryslide(){
    if(j<gallery.length-1){
        document.getElementById(gallery[j-2]).style.display="none";
        j=j+1;
        document.getElementById(gallery[j]).style.display="block";
    }else{
        j=2;
        document.getElementById(gallery[j]).style.display="block";
        document.getElementById(gallery[j-1]).style.display="block";
        document.getElementById(gallery[j-2]).style.display="block";
        document.getElementById(gallery[7]).style.display="none";
        document.getElementById(gallery[8]).style.display="none";
        document.getElementById(gallery[6]).style.display="none";
        document.getElementById(gallery[5]).style.display="none";
        document.getElementById(gallery[4]).style.display="none";
        document.getElementById(gallery[3]).style.display="none";
    }
    
}
var myvar=setInterval(galleryslide, 2000);