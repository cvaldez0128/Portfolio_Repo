<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Artwork Survey</title>
    <link rel="icon" href="initials.png">
    <link rel="stylesheet" href="styles/style.css"> 

    <style>
        body {
            background-color: aquamarine;
            border: 20px solid black;
        }

        h1 {
            text-align: center;
            font-family: Artico Light;
        }

        p {
            text-align: center;
            font-family: Artico Light;
        }

        ul {
            display: table;
            margin: 0 auto;
            font-family: Artico Light;
            
        }

        .fave {
           text-align: center;
      
        }
    

     
    </style>

    <script>

        function myFunction() {
            var art = prompt("What was your favorite?");
            if (art != null) {
                document.getElementById("art").innerHTML =
                "Awesome choice! You chose the " + art + ". Like all of my work, it was a labor of love.";
            }

      
        }


    </script>
  </head>

  <header>
  <!--nav bar-->
  <nav class="grid nav">
    <!--first nav bar item-->
    <a href = "website.html"><div class ="grid-item">
       <h1 class="art-nav">HOME</h1>
    </div></a>
    <!--seconds nav bar item-->
    <a href = "website.html"><div class= "grid-item">
       <h1 class="art-nav">MY WORK</h1>
    </div></a>
    <!--third nav bar item-->
    <a href = "thankyou.php"><div class= "grid-item">
       <h1 class="art-nav">NEXT</h1>
    </div></a>
  </nav>
  <!--adding line breaks-->
  <br>
  <br>
</header>

  <body>

  <h1>THE ARTWORK SURVEY</h1>

  <br>
  

  <p>Which piece of artwork was you favorite? Click the button to enter your favorite.</p>
        
  <br>

        <?php


            function writeMsg() {

                echo 
                    "<ul>

                    <h1>DIGITAL ART</h1>
                        <li>Colorized Vintage Photo</li>
                        <li>Influence Map</li>
                        <li>Polygon Portrait</li>
                        <li>Fake Cereal Brand</li>
                        <li>Earth and Moon</li>
                        <li>Name Art</li>
                        <li>OffCentered Logo</li>
                        <li>Two Halves Make a Whole Drawing</li>
                        <li>Emma Watson Andy Warhol Portrait</li>
                        <li>Multiplicity Photo</li>
                        <li>Infor Graph</li>
                        <li>Parody Movie Poster</li>
                        <li>Baepsae Drawing</li>
                        <li>Creature Drawing</li>
                        <li>UFO Logo</li>
                        <li>Text Silhouette</li>
                    
                    <h1>PHOTOGRAPHY</h1>
                        <li>Tree Light Photo</li>
                        <li>Central Park Photo</li>
                        <li>Wedding Scenery Photo</li>
                        <li>Forbidden Fruit Photo</li>
                        <li>Golden Hour Photo</li>
                        <li>Big Thunder Mountaion Railroad Photo</li>
                        <li>Quenching Thirst Photo</li>
                        <li>Table Quote Photo</li>
                        <li>Lovebirds Photo</li>
                        
                    <h1>VIDEOS</h1>   
                        <li>Life Goes On Lyric Video</li>
                        <li>Five Feet Apart Scene</li>
                        <li>Moon Lyric Video</li>
                        <li>Body Shaming Photo</li>
                      </ul>";
            }

            writeMsg();
            
        ?>

    
        <br>
        <div class="fave">
        <button onClick ="myFunction()">TELL ME YOUR FAVORITE!</button>
        </div>
        <br>
        <br>

        <p id="art"></p>
    </body>
</html>