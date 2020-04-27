      google.charts.load('current', {
        'packages': ['table', 'map', 'corechart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyAHN59_Mygwxtd8HHZQ_703GOl0bqLvyWQ'
      });
      google.charts.setOnLoadCallback(initialize);

      
      function initialize() {
        // The URL of the spreadsheet to source data from.
        var query = new google.visualization.Query(
            'https://spreadsheets.google.com/pub?key=pCQbetd-CptF0r8qmCOlZGg');
        query.send(draw);
      }

      function draw(response) {
        if (response.isError()) {
          alert('Error in query');
        }

        
        let data = top.rawdata;
        var geoData = google.visualization.arrayToDataTable(data);
        let d = [];
        data.forEach(row => {
            d.push(row.slice(2));
        });
        var tableData = google.visualization.arrayToDataTable(d)

        var geoView = new google.visualization.DataView(geoData);
        geoView.setColumns([0, 1]);

        var table = new google.visualization.Table(document.getElementById('table_div'));
        let cssClassNames = {
            'headerRow': 'bold-font white-font large-font blue-background',
            'tableRow': '' ,
            'selectedTableRow': 'large-font bold-font',
            'oddTableRow': 'grey-background',
        };

        table.draw(tableData, {showRowNumber: false, width: '100%', height: '100%', 'cssClassNames': cssClassNames, 'allowHtml': true,});

        var options = {
               showTip: true,
               icons: {
                  default: {
                     normal: 'http://bicc.no/turbin_blaa_smol.png',
                     selected: 'http://bicc.no/turbin_raud_smol.png'
                  }
               }	  
            };

        var map = new google.visualization.Map(document.getElementById('map_div'));
        map.draw(geoView, options);




        // Set a 'select' event listener for the table.
        // When the table is selected, we set the selection on the map.
        google.visualization.events.addListener(table, 'select',
            function() {
                map.setSelection(table.getSelection());
            });

        // Set a 'select' event listener for the map.
        // When the map is selected, we set the selection on the table.
        google.visualization.events.addListener(map, 'select',
            function() {
                table.setSelection(map.getSelection());
            });
      }
    
