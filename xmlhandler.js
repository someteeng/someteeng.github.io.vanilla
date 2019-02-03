function loadXMLDoc(func) {
    var xmlhttp = new XMLHttpRequest(func);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            func(this);
        }
    };
    xmlhttp.open("GET", "products.xml", true);
    xmlhttp.send();
}

function getElement(elem,tag){
    return elem.getElementsByTagName(tag)[0].childNodes[0].nodeValue;
}