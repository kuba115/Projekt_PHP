<?php
session_start();

require "connection.php";
require "header.php";

	$title = "Dodaj wpis";

include "partials/subheader.php";
	$post_title = $_SESSION['title'];
	$post_content = $_SESSION['content'];
	$add_post = $_SESSION['add_post'];

?>  

<section id="form">

	<div class="container">
		<div class="row">
			<?php
				if (($add_post == true) && ($add_post != "")) {?>
					<div class="alert alert-success">
						<h3>Udało Ci się dodać wpis o tytule
							<?php echo $post_title; ?>
						</h3>
					</div>
				<?php }elseif (($add_post == false) && ($add_post != "")){ ?>
					<div class="alert alert-danger">
						<h3>
							Coś poszło nie tak
						</h3>
					</div>
				<?php } ?>
				<?php $_SESSION['add_post'] = ""; ?>
		</div>
	</div>

	<form action="post_form_server.php" method="POST">

	  <div class="form-group">
	    <input type="text" class="form-control" placeholder="Wpisz tytuł wpisu" name="title">
	  </div>

	  <div class="form-group">
	  	<textarea name="content" rows="10" class="form-control" placeholder="Wpisz treść wpisu"></textarea>
	  </div>

	  <button type="submit" name="add_post" class="btn btn-primary">Dodaj wpis</button>
	</form>

</section>


<?php
require "footer.php";

?>