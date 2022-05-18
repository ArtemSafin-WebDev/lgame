<meta charset="utf-8">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<meta id="viewport" name="viewport">
<script>
    let meta_viewport = document.getElementById("viewport");
    viewPort();
    window.addEventListener("resize", function() {
        viewPort();
    });
    function viewPort(){
        if (screen.width < 641) {
            meta_viewport.setAttribute("content", 'width=700, user-scalable=0')
        }
        else if (screen.width < 1081){
            meta_viewport.setAttribute("content", 'width=device-width, initial-scale=.75')
        }
        else {
            meta_viewport.setAttribute("content", 'width=device-width, initial-scale=1.0')
        }
    }
</script>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="imagetoolbar" content="no"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="format-detection" content="address=no"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!---
<meta property="og:image" content=""/>
<meta property="og:title" content=""/>
<meta property="og:description" content=""/>
--->