<?php require 'header.php'; ?>
	<main>
		<div class="blog-container">
			<div class="blog-header">
				<div class="blog-cover">
				</div>
			</div>
			<div class="blog-body">
				<div class="blog-title">
					<h1><button id="myBtn">Для подробной информации кликнуть тут</button></h1>
									<?php require 'modal.php'; ?>

				</div>

                <?php require 'func.php';
                while ($rows=mysqli_fetch_assoc($result)){
                    echo "<br>";
                    echo "<h2>$rows[tittle]</h2>";
                    echo "<br>";
                    echo "<p>$rows[text]</p>";
                    echo "<br>";
                }
                ?>

				<div class="blog-tags">
					<ul>
						<li><a href="#">Новинка</a></li>
						<li><a href="#">JDM</a></li>
						<li><a href="#">Свап</a></li>
						<li><a href="#">Конструктор</a></li>
					</ul>
				</div>
			</div>
			<div class="blog-footer">
				<ul>
					<li class="published-date">16 days age</li>
					<li class="published-date"><p id="demo"></p></li>
					
					<script src="js/modal.js"></script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("September 31, 2019 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
				</ul>
			</div>
		</div>
	</main>
		<?php require 'footer.php'; ?>