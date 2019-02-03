<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Store</title>
    <?php include("head.php");?>
    <script src="xmlhandler.js"></script>   
    <script>
        function loadProduct(xml){
            var productName = location.search.split('product=')[1];
            var xmlDoc = xml.responseXML;
            Array.from(xmlDoc.getElementsByTagName("product")).forEach(function(product){
                    if(getElement(product,"name") == decodeURI(productName))
                    {
                        document.getElementById("polo").setAttribute("src","res/"+getElement(product,"img"));
                        document.getElementsByTagName("h1")[0].innerHTML = getElement(product,"name");
                        document.getElementById("desc").innerHTML = getElement(product,"desc");
                        document.getElementById("price").innerHTML = "Price: " + getElement(product,"price") + " RON";
                    }
            });
            
        }

        loadXMLDoc(loadProduct);

    </script>
</head>
<body>
    <h1>Product name</h1>

    <div class="product">
        <a class="back" href="index.php">Back to main page</a>
        <img class="productImage" id="polo">
        <div class="order">
            <p id="desc"></p>
            <p id="price">Price: </p>
            <form>
                <b>Quantity</b>: <input type="number" value="1" min="1" max="99">
                <input type="submit" value="Add to cart">
            </form>
        </div>
    </div>

    <p class="copyright"><b>© Hunor Csáki 2018</b></p>    
</body>
</html>