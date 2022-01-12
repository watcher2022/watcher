
<?php
include_once 'imdb.class.php';
$q = $_GET["q"];
$oIMDB = new IMDB($q);
if ($oIMDB->isReady) {
?>

<div class="wrapper">
	<div class="main_card">
		<div class="card_left">
			<div class="card_datails">
				<h1><?php echo $oIMDB->getTitle();?></h1>
				<div class="card_cat">
					<p class="PG"><?php echo $oIMDB->getLanguage();?></p>
					<p class="year"><?php echo $oIMDB->getYear();?></p>
					<p class="genre"><?php echo $oIMDB->getGenre();?></p>
					<p class="time"><?php echo $oIMDB->getRuntime();?></p>
				</div>
				<p class="disc"><?php echo $oIMDB->getDescription();?></p>
				<a href="<?php echo $oIMDB->getUrl();?>" target="_blank">Read More</a>
                
			<div class="social-btn">
        <!-- WATCH TRAILER-->
				<button>
				<!-- قم بتغيير الهاتشاغ اسفله الى رابط الكابتشا (قفل المحتوى)-->
                <a href="https://itsverify.com/a9457eb">
			    Free Download
				</a>
                </button>
				<!-- GET-->
				<button>
                <a href="/watch">
				Watch Online
                </a>
				</button>
			</div>	

            </br>
                <p><h6 style="color:black;text-decoration: underline;">Country :</h6> <?php echo $oIMDB->getCountry();?> </p>
                <p><h6 style="color:black;text-decoration: underline;">Cast:  </h6></p>
                <p><?php echo $oIMDB->getCast();?></p>
			</div>
		</div>

		<div class="card_right">
		
			<div class="img_container">
				<img src="<?php echo $oIMDB->getPoster();?> style = 'background-size: cover;' " alt="">
			</div>
			<div class="social-btn">
        <!-- WATCH TRAILER-->
				<button>
                <a href="<?php echo $oIMDB->getTrailerAsUrl();?>">
					<i class="fas fa-play"></i>SEE TRAILER
				</a>
                </button>
				<!-- GET-->
				<!--USERS RATINGS-->
				<button>
					<i class="fas fa-thumbs-up"></i> <?php echo $oIMDB->getRating();?>
				</button>
				
			</div>	
			</div>
		</div>
	</div>

<style>
.main_card {
	color: #fff;
	width: 760px;
	/* height: 390px; */
	margin: 50px auto;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	max-width: 770px;
	background: #F9F9F9; 
	/* background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);
	background: -webkit-gradient(linear, left top, right top, from(#92FE9D), to(#00C9FF));
	background: -webkit-linear-gradient(left, #92FE9D, #00C9FF);
	background: -o-linear-gradient(left, #92FE9D, #00C9FF);
	background: linear-gradient(to right, #92FE9D, #00C9FF);  */
	-webkit-box-shadow: 0 0 40px rgba(0,0,0,0.3); 
	        box-shadow: 0 0 40px rgba(0,0,0,0.3);

	border-radius: 10px;
    border: 4px solid #D1920B;
}

.card_left {
	width: 90%;
}

.card_datails {
	width: 90%;
	padding: 30px;
	margin-top: -25px;
	color: #282a2d;
}
.card_datails  h1 {
	font-size: 30px;
}
.card_right img {
	height: 590px;
	border-radius: 2px;
}
.card_right {
	border-radius: 2px;
}

.card_cat {
	width: 100%;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	    -ms-flex-pack: justify;
	        justify-content: space-between;
}

.PG, .year, .genre, .time {
	color: fff;
	padding: 10px;
	font-weight: bold;
	border-radius: 15px;
	font-size: 15px;
}

.PG {
	/* background: #92FE9D; */
	-webkit-box-shadow: 0 0 50px rgba(0,0,0,0.1);
	        box-shadow: 0 0 50px rgba(0,0,0,0.1);
	-webkit-transition: 300ms ease-in-out;
}

.disc {
	font-weight: 100;
	line-height: 27px;
}
a {
	color: darkcyan;
	display: block;
	text-decoration: none;
}
.social-btn {
	margin-left: -10px;
}
button {
	color: #fff;
	border: none;
	padding: 16px 20px;
	outline: none;
	font-size: 12px;
	margin-top: 30px;
	margin-left: 10px;
	background-color:#e5a00d !important;
   font-weight: bold;
 	border-radius: 20px;
 	font-family: 'Poppins', sans-serif;
	-webkit-box-shadow: 0 0 20px rgba(0,0,0,0.2);
	        box-shadow: 0 0 20px rgba(0,0,0,0.2);
	-webkit-transition: 300ms ease-in-out;
	-o-transition: 200ms ease-in-out;
	transition: 200ms ease-in-out;
}
button a{
	color:#fff;
}
button:hover {
	-webkit-transform: scale(1.1);
	    -ms-transform: scale(1.1);
	        transform: scale(1.1);
}
i.fas.fa-play,.fas.fa-thumbs-up,.fas.fa-download,.fas.fa-phone {
    margin-right: 13px;
}
.play_btn {
	/* margin: -754px auto; */
	position: relative;
    text-align: center;
    background: rgb(249 249 249);
    margin-top: 15%;
    box-shadow: 0 0 50px rgb(0 0 0 / 20%);
}
.fa-play-circle {
	color: #e5a00d;
    font-size: 40px;
	-webkit-animation: bounce 1.0s -0.4s infinite;
	        animation: bounce 1.0s -0.4s infinite;
}

.fa-play-circle:hover {
	color: aqua;
	animation: bounce 0.4s infinite;
}
@-webkit-keyframes bounce {
  8% {
    transform: scale(0.3);
    -webkit-transform: scale(0.8);
    opacity: 1;
  }
  10% {
    transform: scale(1.8);
    -webkit-transform: scale2);
    opacity: 0;
		}
}

@keyframes bounce {
  8% {
    transform: scale(0.3);
    -webkit-transform: scale(0.8);
    opacity: 1;
  }
  20% {
    transform: scale(1.8);
    -webkit-transform: scale2);
    opacity: 0;
		}
}





/*  FOLLOW*/
.Follow {	  background:url("https://pbs.twimg.com/profile_images/959092900708544512/v4Db9QRv_bigger.jpg")no-repeat center / contain;
	width: 50px;
	height: 50px;
	bottom: 9px;
	right: 20px;
	display:block;
	position:fixed;
	border-radius:50%;
	z-index:999;
	animation:  rotation 10s infinite linear;
	}

@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}
</style>

<?php
} else {
echo '<p>Movie not found!</p>';
}
?>



