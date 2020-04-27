let sel_from_date_textbox = document.getElementById("sel_dates_from");
let sel_to_date_textbox = document.getElementById("sel_dates_to");

let all_from_date_textbox = document.getElementById("all_dates_from");
let all_to_date_textbox = document.getElementById("all_dates_to");

let most_hit_all_textbox = document.getElementById("most_hit_turbine_all");
let total_hits_all_textbox = document.getElementById("total_hits_all");

let most_hit_sel_textbox = document.getElementById("most_hit_turbine_selected");
let total_hits_sel_textbox = document.getElementById("total_hits_selected");

function updateFacts(){
    sel_from_date_textbox.innerHTML = top.datefrom;
    sel_to_date_textbox.innerHTML = top.dateto;
    all_from_date_textbox.innerHTML = top.datefrom;
    all_to_date_textbox.innerHTML = top.dateto;
    most_hit_sel_textbox.innerHTML = top.mosthitturbine;
    total_hits_sel_textbox.innerHTML = top.totalhits;
}

most_hit_all_textbox.innerHTML = top.allmosthitturbine;
total_hits_all_textbox.innerHTML = top.alltotalhits;

updateFacts();
