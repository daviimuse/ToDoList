<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Online ToDo List </title>
    <link rel="stylesheet" href="frontEnd/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      $(function(){
        $("#sidebar").load("components/sidebar.html"); 
      });
    </script>
   </head>
<body>
  <section id="sidebar"></section>
  <section class="home-section">
      <div class="text">Home</div>
      <div class="container clearfix">
      <div class="half-col">
				<header>Checkbox</header>
				<form>
						<ul>
								<li>
										<label>
												<input type="checkbox" />
												<span class="lbl padding-8">First checkbox</span>
										</label>
								</li>
        </form>
      </div>
    </div>
  </section>
</body>
</html>
