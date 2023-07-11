    <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ALPHABETGAME</title>
            
                <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
                <link rel="stylesheet" href="css/style.css" type="text/css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" type="text/css"/>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                <script src="css/jquery-2.2.4.min.js">  </script>
        </head>
<body class="color">
    <form name="form" method="get">
            <div class="container" >
                    <div class="row">
                        <div class="col d1 left" >
                            
                                <div class="mid">
                                    <label  class="l1 center" id="text" name="txtvalue"></label>
                                </div>
                                <input  class="a form-control bottom" autofocus id="it" type="text" name="alpha" placeholder="Enter Alphabet"  onkeyup="writeMessage()" maxlength="1">
                            
                        </div>
                            <div class="col d2 right"> 
                                <div class="img mid" id="img-disp">   
                                    <img class="hover-zoom" id="imgid"  class="center"> 
                                </div>
                            </div>
                </div>
            </div>
    </form>
</body>
        <script>

        function writeMessage() {
            //document.forms[0].txtvalue.value = document.forms[0].alpha.value;
                var value1=document.getElementById("it");
                var lblName = document.getElementById("text");
                lblName.innerHTML = value1.value;
                var img = new Image();
                img.src="img/"+value1.value+".png";
                value1.value = "";
                var div=document.getElementById("img-disp");
                
                //div.appendChild(img);
                    $("#imgid").html()
                    var x=$('#imgid').attr('src');
                    $('#imgid').attr('src', img.src );
                    $('#imgid').attr('height', 500 );
                    $('#imgid').attr('width', 400 );
                    //console.log(#imgid);

                    //document.getElementById("img-disp").innerHTML = 'img/'+value1.value+'.jpg';
                    var regEx = /^[0-9a-zA-Z]+$/;
            if(value1.value.match(regEx))
                {
                    return true;
                }
            else
                {
                    return false;
                }
            }
    </script>
        </html>
