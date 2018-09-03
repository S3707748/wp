<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>The House: T</title>
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled/>
	<link id='stylecss' type="text/css" rel="stylesheet" href="css/stylesheet.css" />
	<script src='../wireframe.js'></script>
</head>

<body>

	<nav id="navigation" class="topnav">
		<b class="company-phrase" href="index.php">Jack's House</b>
		<a href="login.php">Login</a>
		<a class="active" href="products.php">Products</a>
		<a href="index.php">Home</a>
	</nav>

	<header id="header" class="header">
		<div class="logo">
			<a href="products.php">
			<img class="cool-logo" src="../../media/fight-milk.png" alt="logo"/>
				</a>
		</div>
		<div class="container">

		</div>
	</header>

	<main>

		<div class="title-div">
			<div class="welcome-to-regular">
				T-Shirt
			</div>
			<div class="sub-message">
				one size fits all
			</div>
		</div>
		<div class="grid-container-products">
			<div class="grid-item">
				<div class="buy-it-text">
				Only comes in XS <br/>
				Handwash only <br/>
				Definitely no refunds</div>
				<div class="product-image">
					<img src=../../media/placeholder-t.png alt="the-good-t" />
				</div>
			</div>
			<div class="grid-item">
				<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" class="form" id="form-submit">
					<input type="hidden" name="id" value="hood">
					Quantity: <input type="number" name="qty" value="0" min="0">
				</form>
				<select name="option" class="select-list" form="form-submit">
					<option value="white">White</option>
					<option value="b-white">Bright White</option>
					<option value="o-white">Off-White</option>
				</select>
			</div>
			<div class="grid-item">
				<button type="submit" form="form-submit" class="buy-button" value="buy">Buy</button>
			</div>
		</div>

	</main>

	<footer class="footer">
		<div>&copy;
			<script>
				document.write(new Date().getFullYear());

			</script> s3707738 and his BombAssStore&trade;.</div>
		<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
		<div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
	</footer>

</body>

</html>
