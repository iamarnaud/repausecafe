
let $input  = $('#fileGet');

function ConvertDMSToDD(degrees, minutes, seconds, direction) {
    var dd = degrees + minutes/60 + seconds/(60*60);

    if (direction == "S" || direction == "W") {
        dd = dd * -1;
    } // Don't do anything for N or E
    return dd;
}

$input.on('change', getExif);

function getExif () {
    let $image  = document.querySelector('input[type=file]').files[0];
    EXIF.getData($image, function() {
        myData = this;
        console.log(myData.exifdata);
        var mapCanvas = document.getElementById('map-canvas');
        var latDegree = myData.exifdata.GPSLatitude[0].numerator;
        var latMinute = myData.exifdata.GPSLatitude[1].numerator;
        var latSecond = myData.exifdata.GPSLatitude[2].numerator / 1000;
        var latDirection = myData.exifdata.GPSLatitudeRef;
        var gLat = ConvertDMSToDD(latDegree, latMinute, latSecond, latDirection);

        var lonDegree = myData.exifdata.GPSLongitude[0].numerator;
        var lonMinute = myData.exifdata.GPSLongitude[1].numerator;
        var lonSecond = myData.exifdata.GPSLongitude[2].numerator / 1000;
        var lonDirection = myData.exifdata.GPSLongitudeRef;

        var gLon = ConvertDMSToDD(lonDegree, lonMinute, lonSecond, lonDirection);

        var dateTime = myData.exifdata.DateTime;
        console.log(gLon+" "+gLat +" " +dateTime)
        let str = "Coordonnées de la photo : longitude "+gLon+" et Latitude "+gLat+"a la date du " +dateTime;
        alert(str);
    });

}


