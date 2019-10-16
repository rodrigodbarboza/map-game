<!DOCTYPE html>
<html>
    <head>
        <title>Kyriri Map</title>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <style type='text/css'>body{margin:0;padding:0;overflow:hidden;font-family:'Segoe UI',Helvetica,Arial,Sans-Serif}</style>
    </head>
    <body>
        <div id='printoutPanel'></div>
        
        <div id='myMap' style='width: 100vw; height: 100vh;'></div>
        <script type='text/javascript'>
            function loadMapScenario() {
                var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});
                var pushpin1 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(-12.046374, -77.042793), { text: 'P', title: 'Gordito Peruano', subTitle: 'Habla Cumpadre' });
                map.entities.push(pushpin1); 
                var pushpin2 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(35.027222, -111.0225), { text: 'B', title: 'Gordinho Brasileiro', subTitle: 'Fala Cumpade' });
                map.entities.push(pushpin2); 
                map.setView({
            mapTypeId: Microsoft.Maps.MapTypeId.aerial,
            center: new Microsoft.Maps.Location(-12.046374, -77.042793),
            zoom: 2
        })               
            }

        </script>
        <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=Ar0QTy8ziEqJxTaPPZZrpdOCzFV89BIO-8ybsui7kMb64ITG93agGpxcXfcEcOUv&callback=loadMapScenario' async defer></script>
    </body>
</html>