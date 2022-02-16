<!DOCTYPE html>
<html style="height: 100%; width: 100%;">
<head>

	<style>
		
        *{
            margin: 0;
            padding: 0;
        }

        body{
            height: 100%; 
            width: 100%;
            background-size: cover;
            animation: animate 25s infinite;
        }

        .opacity{
            background-color: rgba(0,128,128, .6);
        }

		@keyframes animate{
            0%,100%{
                background-image: url(background2.jpg);
            }
            25%{
                background-image: url(background3.jpg);
            }
            50%{
                background-image: url(background4.jpg);
            }
            75%{
                background-image: url(background.jpg);
            }
        }

        h2{
            color: rgb(30, 132, 73);
        }

        .image{
            height: 5%; 
            margin-top: 10%;
        }

	</style>
</head>

<body>
	
    <div class="opacity" style="position: fixed; height: 100%; width: 100%;">
    
        <center><img class="image" src="bethsaida_logo.png"/></center></br>
	    <center><h2>Coming Soon</h2></center>
        
    </div>


</body>
</html>