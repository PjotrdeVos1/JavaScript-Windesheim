const now = new Date();
const hours = now.getHours();
let Groeting;
let Dag;



function getRandomColor() { // Deze fuction zorgt er voor dat er een random kleur per press op de knop komt
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

const item = document.getElementById('item1');

item.innerHTML = "<a href='#' id='colorLink'>Random button color</a>"; // Dit bewerkt de HTML die in


const link = document.getElementById('colorLink');


link.addEventListener('click', function(event) {
    event.preventDefault();

    item.style.backgroundColor = getRandomColor();
});







if (hours < 12) {
    Groeting = "GoedeMorgen"; // Als het voor 12 uur is toont het GoedenMorgen
} else if (hours < 18){
    Groeting = "GoedenMiddag"; // Als het Later dan 12 is en Voor 6 uur toont het GoedenMiddag
} else {
    Groeting = "GoedenAvond"; // Als het later dan 6 uur is toont het GoedenAvond
}

document.getElementById("item2").innerHTML = Groeting // Hier verplaats ik de HTML in ID "item2" Naar de Groeting van hoelaat het is.



switch (new Date().getDay()) {
    case 0:
        Dag = "Zondag";
        break;
    case 1:
        Dag = "Maandag";
        break;
    case 2:
        Dag = "Dinsdag";
        break;
    case 3:
        Dag = "Woensdag";
        break;
    case 4:
        Dag = "Donderdag";
        break;
    case 5:
        Dag = "Vrijdag";
        break;
    case  6:
        Dag = "Zaterdag";
}
document.getElementById("item3").innerHTML = "Vandaag is het " + Dag;