/////////////////////////
/////////VARIABLES///////
/////////////////////////
var findBlip;
var blipped;
var slideToggle = document.querySelectorAll('.slide-toggle');

/////////////////////////
/////////FUNCTIONS///////
/////////////////////////

//Adds the 'blip' effect when clicked

//TODO: FIGURE OUT WHY ITS BLIPPING ALL OF THE BLIPS WHEN ITS BLIPPED......WHAT?!
// function handleCheckTwo(e){
//     findBlip = this.parentElement.querySelectorAll('.blip');
//     findBlip.forEach(blip => blip.classList.add('blipped'));
//     setTimeout(function(){
//         findBlip.forEach(blip => blip.classList.remove('blipped'));
//     }, 520);
// }

//Applies new position and color based on :checked
function isChecked(){
    if(this.checked == true){
        findBlip = this.parentElement.querySelector('.blip');
        this.parentElement.querySelector('.toggle-demo').classList.add('sel-outer');
        this.parentElement.querySelector('.toggle-selector').classList.add('sel-inner');
        // setTimeout(function(){
        //     findBlip.classList.remove('blipped');
        // }, 520);
        console.log('checked');
    } else if(this.checked == false){
        this.parentElement.querySelector('.toggle-demo').classList.remove('sel-outer');
        this.parentElement.querySelector('.toggle-selector').classList.remove('sel-inner');
        console.log('unchecked');
    }
}

/////////////////////////
//////EVENT LISTENERS////
/////////////////////////
slideToggle.forEach(slide => slide.addEventListener('click', isChecked));
// slideToggle.forEach(slide => slide.addEventListener('click', handleCheckTwo));
