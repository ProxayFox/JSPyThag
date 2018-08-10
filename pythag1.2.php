<!DOCTYPE html>
<html lang="en-AU">
	<title>pythag cal</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<script src="./js/jquery-3.3.1.js"></script>
	<body>
		<section class="container">
			<!-- HTML code to find the C value -->
			<section class="row col-sm border" style="padding: 10px;">
				<div style="padding: 50px;">
					<h2>Calculating Hypo</h2>
					<!-- user input for values -->
					<input id="getCA" type="number" placeholder="Input the A (Height) value Here" class="form-control" style="width: 275px;">
					<br>
					<input id="getCB" type="number" placeholder="Input the B (Leghth) value Here" class="form-control" style="width: 275px;">
					<br>
					<button onclick="findC()" class="btn btn-lg btn-primary">Find The Hypotenuse</button>
					<p id="outputC"></p>
			 	</div>

		 		<!-- formula -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>C&sup2; = A&sup2; + B&sup2;</p>
					<p>X&sup2; = <span id="outputCFormA">0</span>&sup2; + <span id="outputCFormB">0</span>&sup2;</p>
					<p>X = &#8730;<span id="outputCsqrt">0</span></p>
					<p>X = <span id="outputCFormAnswer">0</span></p>
				</div>

				<!-- SVG triangle for mesurments -->
				<div style="padding-top: 60px; padding-left: 100px;">
					<svg height="200" width="250">
		 				<polygon points="100,5 100,150 249,150" style="fill:lightblue;stroke:black;stroke-width:2" />
		 				<text x="50" y="100" text-anchor="middle" fill="black" font-size="20" id="outputCTriA">A</text>
		 				<text x="125" y="175" text-anchor="middle" fill="black" font-size="20" id="outputCTriB">B</text>
		 				<text x="200" y="50" text-anchor="middle" fill="black" font-size="20">X</text>
		 			</svg>
				</div>
			</section>



			<!-- finding the B Value -->
			<section class="row col-sm border" style="padding: 10px;">
				<div style="padding: 50px;">
					<!-- user input for values -->
				  <h2>Calculating Width</h2>
				  <input id="getBA" type="number" placeholder="Input the Height value Here" class="form-control" style="width: 275px;">
				  <br>
				  <input id="getBC" type="number" placeholder="Input the Hypotenuse value Here" class="form-control" style="width: 275px;">
				  <br>
				  <button onclick="findB()" class="btn btn-lg btn-primary">Find The Width</button>
				  <p id="outputB"></p>
			 </div>
		 		<!-- formula -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>B&sup2; = C&sup2; - A&sup2;</p>
					<p>X&sup2; = <span id="outputBFormA">0</span>&sup2; - <span id="outputBFormC">0</span>&sup2;</p>
					<p>X = √<span id="outputBsqrt">0</span></p>
					<p>X = <span id="outputBFormAnswer">0</span></p>
				</div>
				<!-- SVG triangle for mesurments -->
				<div style="padding-top: 60px; padding-left: 100px;">
					<svg height="200" width="250">
		 				<polygon points="100,5 100,150 249,150" style="fill:lightblue;stroke:black;stroke-width:2" />
		 				<text x="50" y="100" text-anchor="middle" fill="black" font-size="20" id="outputBTriA">A</text>
		 				<text x="200" y="50" text-anchor="middle" fill="black" font-size="20" id="outputBTriC">C</text>
		 				<text x="125" y="175" text-anchor="middle" fill="black" font-size="20">X</text>
		 			</svg>
				</div>
			</section>



			<!-- finding the A Value -->
			<section class="row col-sm border" style="padding: 10px;">
				<div style="padding: 50px;">
					<!-- user input for values -->
				  <h2>Calculating Height</h2>
				  <input id="getAB" type="number" placeholder="Input the Width value Here" class="form-control" style="width: 275px;">
				  <br>
				  <input id="getAC" type="number" placeholder="Input the Hypotenuse value Here"  class="form-control" style="width: 275px;">
				  <br>
				  <button onclick="findA()" class="btn btn-lg btn-primary">Find The Height</button>
				  <p id="outputA"></p>
			 </div>

		 		<!-- formula -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>A&sup2; = C&sup2; - B&sup2;</p>
					<p>X&sup2; = <span class="outputAFormB">0</span>&sup2; - <span id="outputAFormC">0</span>&sup2;</p>
					<p>X = &#8730;<span id="outputAsqrt">0</span></p>
					<p>X = <span id="outputAFormAnswer">0</span></p>
				</div>
				<!-- SVG triangle for mesurments -->
				<div style="padding-top: 60px; padding-left: 100px;">
					<svg height="200" width="250">
		 				<polygon points="100,5 100,150 249,150" style="fill:lightblue;stroke:black;stroke-width:2" />
		 				<text x="125" y="175" text-anchor="middle" fill="black" font-size="20" class="outputATriB">B</text>
		 				<text x="200" y="50" text-anchor="middle" fill="black" font-size="20" id="outputATriC">C</text>
		 				<text x="50" y="100" text-anchor="middle" fill="black" font-size="20">X</text>
		 			</svg>
				</div>
			</section>
		</section>



		<script>
			//find the C Value
			function findC(){
			  var a = document.getElementById("getCA").value;
			  var b = document.getElementById("getCB").value;
			  var c = Math.sqrt(Math.pow(a, 2) + Math.pow(b, 2));
			  document.getElementById("outputC").innerHTML="Height= "+ a + "<br> Width= " + b + "<br> Hypotenuse= " + c;
			  document.getElementById("outputCFormA").innerHTML = a;
			  document.getElementById("outputCFormB").innerHTML = b;
			  document.getElementById("outputCTriA").innerHTML = a;
			  document.getElementById("outputCTriB").innerHTML = b;
			  document.getElementById("outputCsqrt").innerHTML = Math.pow(a, 2) + Math.pow(b, 2);
			  document.getElementById("outputCFormAnswer").innerHTML = c;
			}

			// Find the B Valuse
			function findB(){
			  var a = document.getElementById("getBA").value;
			  var c = document.getElementById("getBC").value;
			  var b = Math.sqrt(Math.pow(c, 2) -  Math.pow(a, 2));
			  document.getElementById("outputB").innerHTML = "Height= "+ a + "<br> Width= " + b + "<br> Hypotenuse= " + c;
			  document.getElementById("outputBFormA").innerHTML = a;
			  document.getElementById("outputBFormC").innerHTML = c;
			  document.getElementById("outputBTriA").innerHTML = a;
			  document.getElementById("outputBTriC").innerHTML = c;
			  document.getElementById("outputBsqrt").innerHTML = Math.pow(c, 2) - Math.pow(a, 2);
			  document.getElementById("outputBFormAnswer").innerHTML = b;
			}

			//Find the A Value
			function findA(){
			  var b = document.getElementById("getAB").value;
			  var c = document.getElementById("getAC").value;
			  var a = Math.sqrt(Math.pow(c, 2) -  Math.pow(b, 2));
			  document.getElementById("outputA").innerHTML = "Height= "+ a + "<br> Width= " + b + "<br> Hypotenuse= " + c;
			  document.getElementById("outputAFormB").innerHTML = b;
			  document.getElementById("outputAFormC").innerHTML = c;
			  document.getElementById("outputATriB").innerHTML = b;
			  document.getElementById("outputATriC").innerHTML = c;
			  document.getElementById("outputAsqrt").innerHTML = Math.pow(c, 2) - Math.pow(b, 2);
			  document.getElementById("outputAFormAnswer").innerHTML = a;
			}
		</script>
	</body>
</html>