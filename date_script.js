// Sett til- og fra-datoer til siste 30 dager.
let today = new Date(new Date().setDate(new Date().getDate() + 1)).toISOString().substr(0,10);


let before = new Date();
before.setDate(before.getDate() - 30);
before = before.toISOString().substr(0,10);

var dateToDOM = document.getElementById("date_to")
dateToDOM.value = today;
top.dateto = today;

var dateFromDOM = document.getElementById("date_from")
dateFromDOM.value = before;
top.datefrom = before;

dateFromDOM.addEventListener("input", (event) => {
    top.datefrom = dateFromDOM.value;
    updateDate();
});

dateToDOM.addEventListener("input", (event) => {
    console.log(dateToDOM.value);
    top.dateto = dateToDOM.value;
    updateDate();
});
