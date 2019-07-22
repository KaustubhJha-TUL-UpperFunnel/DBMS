<html>
	<head>
		<style type="text/css">
			.split {
			  height: 100%;
			  width: 50%;
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  overflow-x: hidden;
			  padding-top: 20px;
			}

			/* Control the left side */
			.left {
			  left: 0;
			  background-color: #c9c3bf;
			}

			#left:hover{
			  right: 0;
			  background-color: #23cecb;
			}

			/* Control the right side */
			.right{
			  right: 0;
			  background-color: #c9c3bf;
			}

			#right:hover{
			  right: 0;
			  background-color: #23cecb;
			}

			/* If you want the content centered horizontally and vertically */
			.centered {
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			  text-align: center;
			}

			/* Style the image inside the centered container, if needed */
			.centered img {
			  width: 150px;
			  border-radius: 50%;
			}
		</style>
	</head>

	<body>
	<div id = "left" class="split left"  onClick = "agentlogin()">
	  <div class="centered">
		<h2>AGENT</h2>
		<p>Agent Employees Login Here</p>
	  </div>
	</div>

	<div id = "right" class="split right" onClick = "customerlogin()">
	  <div class="centered">
		
		<h2>Customer</h2>
		<p>Customer Login here</p>
	  </div>
	</div>
	

	<script src="login_controler.js"></script>
	</body>
</html>