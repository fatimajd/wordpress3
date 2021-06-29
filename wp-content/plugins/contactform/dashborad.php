<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
    #ctpop{
			position: absolute;
			z-index:1;
			width: 99.9%;
			height: 900px;
			background-color: rgb(120, 120, 120,0.5);
			left: 0;
			top: 0;
			display: none;
		}
	#popup{
			z-index:100;
			background-color:black;
			width: 800px;
			height: auto;
			position: relative;
			top: 20%;
			left: 20%;
			border-radius: 10px;
			display: flex;
			flex-direction: column;
			justify-content: end;
			font-weight: bold;
			
		}
		#popup div{
			display: flex;
			flex-direction: column;
		}
		#popup div.hd{
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			border-bottom: 1px solid #707070;
			width: 90%;
			padding:14px 24px;
			font-size: 20px;
      color:white;
		}
		span{
			cursor: pointer;
			 text-align: end;
			 padding-right: 10px;
			 margin-top: 5px;
			 margin-bottom: 10px;
		}
		span button{
			border: none;
			background-color: white;
			font-size: 20px;
		}
    .add{
			color: white;
			background-color: #58fa7e;
			border: none;
			width: 50px;;
			position: relative;
			left: 90%;
			margin-top: 30px;
			padding: 10px;
		}
		.form{
			padding: 40px;
		}
		.form input,.form .flp{
			background-color: #f7f7f7;
			height: 40px;
			border:none;
			outline: 0 !important;
		}
    label{
			position: relative;
      color:white;
			left: 30px;
		}
		#crv{
			opacity: 0;
		}
    </style>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">COntent</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $connection = mysqli_connect('localhost','root','');
        mysqli_select_db($connection,"wordpress3");
        $query = "SELECT * FROM contactus order by id desc";
        $result = mysqli_query($connection, $query);
            while ($row = $result->fetch_assoc()) {
                echo '<tr ><td>'. $row["fullname"] . '</td><td>' . $row["email"] . '</td><td>' . $row["subjecte"] . '</td><td>' . $row["content"] . '</td><td><button class="new" onclick="f2()">repondre</button></td></tr>';
            }
            ?>
  </tbody>
</table>
<div id="ctpop">
		<div id="popup">
			<div class="hd">Message<span onclick="f2()"><button>X</button></span></div>
			
			<div class="form">
				<label for="name">repondre:</label><input type="text" id="name" required><br>
				
				<button class="add" onclick="add()">Add</button>
			</div>

		</div>
	</div>
</body>
<script type="text/javascript">
function f2() {
  var d = document.getElementById("ctpop");
  if (d.style.display === "none") {
    d.style.display = "block";
  } else {
    d.style.display = "none";
  }
}
</script>
</html>