      google.charts.load('current', {
        'packages': ['table', 'map', 'corechart'],
        'mapsApiKey': 'DIN-GOOGLE-API-KEY'
      });
      google.charts.setOnLoadCallback(initialize);

      
      function initialize() {}

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




        // Sett listeners for å binde sammen tabell og kart:
        google.visualization.events.addListener(table, 'select',
            function() {
                map.setSelection(table.getSelection());
            });
        google.visualization.events.addListener(map, 'select',
            function() {
                table.setSelection(map.getSelection());
            });
      }
    
