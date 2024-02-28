<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../styles/admin/config.css">
	<link rel="stylesheet" href="../styles/admin/categories.css">
	<title>AdminHub</title>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>
    <script type='module' src="../utils/admin/lenguage.js">	</script>
</head>
<body>

    <?php
        include('views/templates/admin/sidebar.php')
    ?>

	<!-- CONTENT -->
	<section id="content">

        <?php
            include('views/templates/admin/navbar.php')
        ?>

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1 data-title>Panel</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<button class='btn-create'>Nueva categoria</button>
					<button class='btn-create'>Nueva Subcategoria</button>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Categories</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Name</th>
								<th data-date >Description</th>
								<th data-status>Image</th>
								<th>Subcategories</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Matematicas</p>
								</td>
								<td>
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam laboriosam consequuntur iure temporibus repellat, mollitia animi illum nesciunt natus totam iste aliquid non magni eum tempora? Necessitatibus nemo perspiciatis incidunt!
								</td>
								<td>
									<img src="" alt="">
								</td>
								<td>
									algo
								</td>
							</tr>
							<tr>
								<td>
									<p>Matematicas</p>
								</td>
								<td>
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam laboriosam consequuntur iure temporibus repellat, mollitia animi illum nesciunt natus totam iste aliquid non magni eum tempora? Necessitatibus nemo perspiciatis incidunt!
								</td>
								<td>
									<img src="" alt="">
								</td>
								<td>
									algo
								</td>
							</tr>
							<tr>
								<td>
									<p>Matematicas</p>
								</td>
								<td>
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam laboriosam consequuntur iure temporibus repellat, mollitia animi illum nesciunt natus totam iste aliquid non magni eum tempora? Necessitatibus nemo perspiciatis incidunt!
								</td>
								<td>
									<img src="" alt="">
								</td>
								<td>
									algo
								</td>
							</tr>
							<tr>
								<td>
									<p>Matematicas</p>
								</td>
								<td>
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam laboriosam consequuntur iure temporibus repellat, mollitia animi illum nesciunt natus totam iste aliquid non magni eum tempora? Necessitatibus nemo perspiciatis incidunt!
								</td>
								<td>
									<img src="" alt="">
								</td>
								<td>
									algo
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->
	

	<script src="../utils/admin/script.js"></script>
	<script src="../utils/admin/counter.js"></script>
</body>
</html>