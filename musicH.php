<?php
?>

<!DOCTYPE html>

<html>

<head>
	 <title>Music Player</title>
	 <!--Linking the CSS stylesheet using extrenal CSS-->
	 <link rel="stylesheet" type="text/css" href="MusicPlayerStyle.css">
	 <!--Font Awesome script for using icons from font awesome-->
	 <script src="https://kit.fontawesome.com/6f0f83005a.js" crossorigin="anonymous"></script>
	 <!--Adds responsiveness to the website-->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
</head>
<!--End of head section-->

<!--Begining of the body section-->
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
        <div>
			<div>
				    <a href="mainbot.php" style="color:white;">C H A T B O T</a>
				
			</div>
			
				
			
		</div>
         <!--Search Bar div-->
         <div id="search-bar-utility">
		 <div id="search-bar">
			 <form>
				 
				 <!--Search Icon-->
				 
			 </form>
		 </div>
	</nav>
   
	<main>
		
        

       <!--Begining of playlist section-->
	   <br>
	   <div id="playlistH">
		<h1>Playlists</h1>
        <div id="playlist">
    
        	<!--Playlist item 2-->
        	<div id="playlist-item-2">
        		<div id="popular-artists-text">
					<a href="retro.php">Retro</a>
			    </div>
        	</div>
        	<!--End of playlist item 2-->
        	<!--Playlist item 3-->
        	<div id="playlist-item-3">
        		<div id="popular-artists-text">
				<a href="chill.php">Chill</a>
			    </div>
        	</div>
        	<!--End of playlist item 3-->
        	<!--Playlist item 4-->
        	<div id="playlist-item-4">
        		<div id="popular-artists-text">
				<a href="rock.php">Rock</a>
			    </div>
        	</div>
        	<!--End of playlist item 4-->
        	<!--Playlist item 5-->
        	<div id="playlist-item-5">
        		<div id="popular-artists-text">
				<a href="workout.php">Workout</a>
			    </div>
        	</div>
        	<!--End of playlist item 5-->
        	
        </div>
		</div>
        <!--End of playlist section-->

        <!--Begining of genre section-->
		<div id="genreH">
	    <div id="genre">
	    	<!--Genre Item 1-->
	    	<div id="genre-item">
	    		 <div id="genre-item-background-1"><a style="color:white;" href="party.php">Party</a></div>
	    	</div>
	    	<!--End of genre item 1-->
	    	<!--genre item 2-->
	    	<div id="genre-item">
	    		 <div id="genre-item-background-2"><a style="color:white;" href="electronics.php">Electronics</a></div>
	    	</div>
	    	<!--End of genre item 2-->
	    	<!--Genre Item 3-->
	    	<div id="genre-item">
	    		 <div id="genre-item-background-3"><a style="color:white;" href="roadtrip.php">Road Trip</a></div>	    	
	    	</div>
	    	<!--End of genre item 3-->
	    </div>
		</div>
	    <!--End of genre section-->

	   

   <footer>
   <!--The bottom music bar which pops up when we play a music-->
	<div id="music-bar" class="hide">
		<!--Music Icon-->
		<div id="music-icon">
			 <img src="Images/latest-release-2.png" alt="music-icon">
		</div>
		<!--End of music icon-->
		<!--Music title-->
		<div id="music-title">
			<b>evermore (feat. Bon Iver)</b>
            <div id="favourite">
			   <i class="far fa-heart"></i>
			</div>
			<div id="remove">
				<i class="fas fa-ban"></i>
			</div>
			<br/>
			<artist id="music-player-title-artist">Taylor Swift</artist>
		</div>
		<!--End of music title-->
		<!--Play buttons-->
		<div id="play-buttons">
			<i class="fas fa-random"></i>
			<i class="fas fa-backward"></i>
			<i class="fas fa-pause-circle"></i>
			<i class="fas fa-forward"></i>
			<i class="fas fa-undo-alt"></i>
		</div>
		<!--End of play buttons-->
		<!--Music start time-->
	    <div id="start-time">
            0:00
	    </div>
	    <!--End of music start time-->
	    <!--Music end time-->
	    <div id="end-time">
            5:04
	    </div>
	    <!--End of music end time-->
	    <!--Begining of the progress bar-->
		<div id="progress-bar">
		     <div id="circle">
			     <i class="fas fa-circle"></i>
		    </div>
		</div>
		<!--End of progress bar-->
		<!--Miscellaneous icons-->
		<div id="queue">
			<i class="fas fa-bars"></i>
		</div>
		<div id="volume">
			<i class="fas fa-volume-up"></i>
		</div>
		<div id="progress-bar-volume">
			<div id="circle-volume">
			  <i class="fas fa-circle"></i>
		    </div>
		</div>
		<!--End of miscellaneous icons-->
	</div>
	<!--End of music bar-->
   </footer>
   <!--End of footer section-->
</body>
<!--End of body section-->
</html>
<!--End of html code-->