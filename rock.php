<!DOCTYPE html>
<html>
<!--Begining of head section--> 
<head>
	 <title>Rock playlist</title>
	 <!--Linking the CSS stylesheet using extrenal CSS-->
	 <link rel="stylesheet" type="text/css" href="MusicPlayerStyle.css">
	 <!--Font Awesome script for using icons from font awesome-->
	 <script src="https://kit.fontawesome.com/6f0f83005a.js" crossorigin="anonymous"></script>
	 <!--Adds responsiveness to the website-->
	 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
	 <style>
		.alb{
			justify-content: center;
			align-items: center;
			margin-left:60px;;
			min-height: 200vh;
			width:60%;
			height:10%;
	        background-color: var(--bg_color_2);
	        justify-content: space-between;
		}
	</style>
</head>
<!--End of head section-->
<body>
	<!--Begining of navigation bar section-->
	<nav>
		<!--Music Player Logo div-->
		<div id="music-player-tag">
		 <div id="music-player-logo">
			 <img src="Images/music-player-logo.png">
		 </div>
		 <!--Music Player Logo div end-->

		 <!--Music Player Title-->
		 <div id="music-player-name">
             Music<br/><b>Player</b>
		 </div>
		</div>
		 <!--Music Player Title div end-->

         <!--Search Bar div-->
         
		 <!--Search Bar div end-->

         

         
	</nav>
    <!--End of navigation bar section-->


    <!--Main Section-->
    <main>
    	<!--Artist Template-->
    	<div id="artist-template">
    		<div id="artist-image">
    		</div><!--Artist Details
      >--><div id="artist-details">
      	     <!--Artist Title-->
      	     <div id="artist-title">
      	     	<div>
      	     	   <b>Rock Playlist</b>
      	     	   <br/>
      	     	   <artist-type></artist-type>
      	         </div>
      	     	
      	      </div>
              <!--End of Artist Title-->
              <!--Artist Intro-->
      	     <div id="artist-intro">
                  Enjoy 'Rock' playlist.
      	     </div>
      	     <!--End of Artist Intro-->
      	     <!--Miscellaneous Buttons-->
      	      <div id="artist-buttons">
      	 	
      	 </div>
      	 
      	 <!--End of miscellaeous buttons-->
      	 </div>
         <!--End of artist details-->
    	</div>
    	<!--End of artist template-->

    	
    </main>
    <!--End of main section-->
    
    <!--Begining of Aside Section-->
    <aside>
    	<div id="aside-header-1">
    		Other Playlist
    		<a href="musicH.php"><x>View All</x></a>
    	</div>
        <!--Similar artist-->
    	<div id="similar-artist">
    		<div id="artist-img2"></div>
    		<div id="song-details">
    			<a style="padding:20px;font-size:30px;" href="retro.php">Retro</a>
    			<br/>
    	    
    	    </div>
    	    
    	</div>

    	<div id="similar-artist">
    		<div id="artist-img4"></div>
    		<div id="song-details">
    			<a style="padding:20px;font-size:30px;" href="chill.php">Chill</a>
    			<br/>
    	    </div>
    	    
    	</div>

    	<div id="similar-artist">
    		<div id="artist-img3"></div>
    		<div id="song-details">
    			<a style="padding:20px;font-size:30px;" href="workout.php">Workout</a>
    			<br/>
    	    
    	    </div>
    	    
    	</div>
        <!--End of Similar artist-->
    	 </aside>
    <!--End of aside-->

<div class="alb">
	<?php 
	 include "db_conn.php";
	 $sql = "SELECT * FROM rock ORDER BY id DESC";
	 $res = mysqli_query($conn, $sql);

	 if (mysqli_num_rows($res) > 0) {
		 while ($video = mysqli_fetch_assoc($res)) { 
	 ?>
		<p style="font:20px;color:White; height: 20%;width: 100%;"><?=$video['name']?></p>
		<audio style="width:900px; background-color:white;"  id="audio1" src="uploads/<?=$video['video_url']?>" 
			   controls>
		</audio>

	<?php 
	 }
	 }else {
		 echo "<h1>Empty</h1>";
	 }
	 ?>
</div>
</body>
<!--End of body section-->
</html>
<!--End of html code-->