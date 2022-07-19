function fetchAndDisplay(fileName) {
    fetch(fileName).then(function (response) {
        console.log(fileName)
        if (response.status == '404') {
            alert('File Not Found');
        } else {
            response.text().then(function (text) {
                document.getElementById('articulo').innerHTML = text;
            })
        }
    })
}
