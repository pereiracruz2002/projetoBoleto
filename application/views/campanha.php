<?php 
include("header.php");
?>
	<main>
		<div class="container-fluid">
			
			
			<div class="row">

			<?php include("menu.php"); ?>

			<section class="saiba-campanha text-center">

						<iframe width="900px" height="396" src="https://www.youtube.com/embed/DbNtR5qE7mo" frameborder="0" allowfullscreen></iframe>

						<div class="col-md-12">
							<ul id="abas" class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Campanha Unificado</a></li>
							    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Gifts</a></li>
							    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">PPT Regras</a></li>

			  				</ul>

							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="home"> Texto Home</div>
							    <div role="tabpanel" class="tab-pane" id="profile">Profile</div>
							    <div role="tabpanel" class="tab-pane" id="messages">Messagens</div>
							  </div>

						</div>
					
				
			</section>
			
			</div>
		</div>
	</main>
<?php 
include("footer.php");
?>