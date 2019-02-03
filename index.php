<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Store</title>
    <?php include("head.php");?>
    <script src="xmlhandler.js"></script>   
    <script defer>
        function loadProductList(xml) {
            var i;
            var xmlDoc = xml.responseXML;
            var productsList = "";
            Array.from(xmlDoc.getElementsByTagName("product")).forEach(function(p){
                
                productsList += "<a href=\"productview.php?product=" +
                    getElement(p,"name") + "\"><img src=\"res/" +
                    getElement(p,"img") + "\" class=\"centeredImage\"></a>";
            
            });

            document.getElementsByClassName("products")[0].innerHTML = productsList;
        }

        loadXMLDoc(loadProductList);

        window.onload = init;
        
        function init(){
            var btn = document.getElementById("cartButton");
            var modal = document.getElementById('cartModal');
            btn.onclick = function() {
                modal.style.display = "block";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }

    </script>
</head>
<body>
    <h1>Feel free to browse</h1>
    <a href="https://instagram.com/someteeng" class="instalink">
        <img src="res/insta.png">
    </a>

    <img id="cartButton" src="res/cart.png">
    <?php include("cartview.php");?>

    <div class="products">
    </div>

    <p class="copyright"><b>© Hunor Csáki 2018</b></p>
</body>
</html>