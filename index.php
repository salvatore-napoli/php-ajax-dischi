<?php
	require_once __DIR__ . '/database/database.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Dischi</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/vue"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
      <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css?v=2">
    </head>
    <body>
			<div id="app" class="flex">
				<div class="left-bar"></div>

				<div class="page-container flex">

					<header class="header">
							<div class="header-content flex">
								<img src="img/logo.png" alt="logo" />
							</div>
					</header>

					<main class="main">
						<div class="filter-container">
							<label class="filter" for="genreFilter">Filter by Genre</label>
							<select id="genreFilter">
								<option>All</option>
							</select>
						</div>

						<div class="cds-container flex">
							<?php
								foreach ($disks as $disk) {
							?>

							<div class="cd flex">
								<img class="cd-poster" src="<?php echo $disk['poster']; ?>" alt="poster" />
								<h3 class="cd-title"><?php echo $disk['title']; ?></h3>
								<span class="cd-author text-bold"><?php echo $disk['author']; ?></span>
								<span class="cd-year text-bold"><?php echo $disk['year']; ?></span>
							</div>

							<?php
								}
							?>
						</div>
					</main>
				</div>

				<div class="right-bar"></div>
			</div>

      <script src="js/script.js" charset="utf-8"></script>
    </body>
</html>
