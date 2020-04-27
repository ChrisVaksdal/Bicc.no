top.graphtype = "histogram";
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function updateAllData(){
    // Update top.data
    // Update facts
    // drawChart(top.graphtype);
}

function updateGraphType(type){
    top.graphtype = type;
    drawChart();
}

function updateDate(){
    updateData();
    updateFacts();
    drawChart();
}

function drawChart() {
    if(top.graphtype == "histogram"){
        var options = {
          title: 'Treff på Vindturbiner',
          curveType: 'none',
          legend: { position: 'bottom' }
        };

        var parsed_data = google.visualization.arrayToDataTable(top.data);

        var chart = new google.visualization.Histogram(document.getElementById('curve_chart'));

    }
    else if(top.graphtype == "line-all"){
        var options = {
          title: 'Treff på Vindturbiner',
          curveType: 'none',
          legend: { position: 'bottom' }
        };

        let data = top.data;
        let temp = []

        for(let i  = 1 ; i < data.length; i++){
            temp.push(data[i][0].slice(0,10));
        }

        var a = [];
        var b = [];
        var prev;

        temp.sort();
        for(let i = 0; i < temp.length; i++){
            if(temp[i] !== prev){
                a.push(temp[i]);
                b.push(1);
            }
            else{
                b[b.length - 1]++;
            }
            prev = temp[i];
        }

        var c = [["Turbin", "Treff"],];

        a.forEach((el, i) => {
            c.push([el, b[i]]);
        });

        var parsed_data = google.visualization.arrayToDataTable(c);


        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    }
    else if(top.graphtype == "line-separate"){
        var options = {
          title: 'Treff på Vindturbiner',
          curveType: 'none',
          legend: { position: 'bottom' }
        };

        let data = top.data;
        let all = {}; 

        for(let i  = 1 ; i < data.length; i++){
            if(!all[data[i][1]]){
                all[data[i][1]] = [data[i][0].slice(0,10)];
            }
            else{
                all[data[i][1]].push(data[i][0].slice(0,10));
            }
        }

        for(let [turbine, hits] of Object.entries(all)){
            
            var a = [];
            var b = [];
            var prev;

            let temp = hits;

            temp.sort();
            for(let i = 0; i < temp.length; i++){
                if(temp[i] !== prev){
                    a.push(temp[i]);
                    b.push(1);
                }
                else{
                    b[b.length - 1]++;
                }
                prev = temp[i];
            }

            var c = [`Turbin ${turbine}`,];

            a.forEach((el, i) => {
                c.push([el, b[i]]);
            });
        }


        var parsed_data = google.visualization.arrayToDataTable(c);


        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    }
    else if(top.graphtype == "sector"){
        var options = {
          title: 'Treff på Vindturbiner',
          curveType: 'none',
          legend: { position: 'bottom' }
        };

        let data = top.data;
        let temp = []

        for(let i  = 1 ; i < data.length; i++){
            temp.push(`Turbin ${data[i][1]}`);
        }

        var a = [];
        var b = [];
        var prev;

        temp.sort();
        for(let i = 0; i < temp.length; i++){
            if(temp[i] !== prev){
                a.push(temp[i]);
                b.push(1);
            }
            else{
                b[b.length - 1]++;
            }
            prev = temp[i];
        }

        var c = [["Turbin", "Treff"],];

        a.forEach((el, i) => {
            c.push([el, b[i]]);
        });

        var parsed_data = google.visualization.arrayToDataTable(c);

        var chart = new google.visualization.PieChart(document.getElementById('curve_chart'));
    }
        chart.draw(parsed_data, options);
}


function toggleSelected(id){
    console.log(id);
    if(top.selectedturbines.includes(Number(id))){
        top.selectedturbines.forEach((el, i) => {
            if(el == Number(id)){
                top.selectedturbines.splice(i,1);
            }
        });
    }
    else{
        top.selectedturbines.push(Number(id));
    }
    updateData();
    drawChart();
}
