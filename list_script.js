top.data = [["Tidspunkter", "Turbin"]]; 

function updateGraph(){
    let lst = document.querySelectorAll('.checkbox');
    lst.forEach((el) => {if(el.checked){checked_list.push()}});
}

list_container = document.getElementById("turbine_list");
let data = document.getElementById("data_table");
let turbines = new Object();

top.selectedturbines = [1, 2, 3, 4, 5];

function updateData(){
    top.data = [["Tidspunkter", "Turbin"]]; 
    data.childNodes.forEach((element) => {
        cols = element.childNodes;

        let dt = new Date(cols[1].innerHTML);
        let id = Number(cols[0].innerHTML);

        if(dt >= new Date(top.datefrom) && dt <= new Date(top.dateto) && top.selectedturbines.includes(id)){
            let temp = [];
            temp.push(cols[1].innerHTML);
            temp.push(Number(cols[0].innerHTML));

            let el = element.childNodes[0];
            if(isNaN(Number(turbines[el.innerHTML]))){
                turbines[el.innerHTML] = 1;
            }
            if(isNaN(Number(turbines[el.innerHTML]))){
                turbines[el.innerHTML] = 1;
            }
            else{
                turbines[el.innerHTML] = Number(turbines[el.innerHTML]) + 1;
            }
            top.data.push(temp);
        }
    });
    top.mosthitturbine = 12;
    top.totalhits = 34;
}

updateData();

/*
// Apparantly this is important to check for.
// Don't remember why and it works without it.
for (let prop in turbines){
    if (Object.prototype.hasOwnProperty.call(turbines, prop)){
        console.log(prop);
    }
}
*/

top.rawdata = [['Grader hit', 'grader dit', 'Navn', 'Treff?','Antall treff', 'Vis data',],];

let coords = [[63.418055, 10.117745], [63.418228, 10.118992], [63.418233, 10.119311], [63.418286, 10.120057], [63.417993, 10.120282]];
let i = 0;

for (let [key, value] of Object.entries(turbines)) {
    let turbine_id = key;
    let total_hits = value;

    template = [];
    template.push(coords[i][0]);
    template.push(coords[i][1]);
    template.push(`Turbin ${turbine_id}`);
    template.push(total_hits > 0);
    template.push(total_hits);

    let checkbox = `
        <input type=checkbox checked="true" class="checkbox" onchange="toggleSelected(${i})">
    `;

    template.push(checkbox);

    i++;

    /*
    template = `
                <label class="checkbox_container">
                        <span class="turbine_name">Turbin ${turbine_id}</span>
                        <span class="turbine_hits">(${total_hits})</span>
                        <input type="checkbox" class="checkbox">
                        <span class="checkmark"></span>
                </label>
                <hr>
    `;
    

    obj = document.createElement("label");
    obj.innerHTML = template;

    list_container.appendChild(obj);
    */
    top.rawdata.push(template);
}
