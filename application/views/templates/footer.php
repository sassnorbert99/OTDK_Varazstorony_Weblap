		</div>
		<script>
			CKEDITOR.replace('editor1');

		</script>
		<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Galery -->
    <link href='<?php echo base_url()?>/assets/gallery/simplelightbox-master/dist/simple-lightbox.min.css' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url()?>/assets/gallery/simplelightbox-master/dist/simple-lightbox.jquery.min.js"></script>
        
        <link href='<?php echo base_url()?>/assets/gallery/style.css' rel='stylesheet' type='text/css'>
   
        
    <script type='text/javascript'>
        $(document).ready(function(){

            // Intialize gallery
            var gallery = $('.gallery a').simpleLightbox();
        });
        </script>

      <!-- ------------------ -->
	</body>

	<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}

</style>
 <!--
style="position: fixed;
  right: 0;
  bottom: 0;
  width: 100%; height: 50px; text-align: center; "
 -->

	<?php if($title=='Map'):?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="position: fixed;
  
  bottom: 0;
  width: 100%;
  align-self:  center ; ">
  <h3>Jelmagyarázat</h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <table>
      <tr>
        <td>
          <table class="table table-hover" style="font-size: 14px;" >
            <th>
              <td><h2>Színek</h2></td>
              <td></td>
            </th>
            <tr>
              <td><h3><p class="badge badge-pill badge-danger">Megtekinthető</p></h3></td>
              <td><h3>Megtekinthető tartalom.</h3></td>
            </tr>
            <tr>
              <td><h3><p class="badge badge-pill badge-warning">Interaktív</p></h3></td>
              <td><h3>Interaktív tartalom.</h3></td>
            </tr>
            <tr>
              <td><h3><p class="badge badge-pill badge-success">Vezérelhető</p></h3></td>
              <td><h3>Vezérelhető tartalom.</h3></td>
            </tr>
            
          </table>
        </td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
     
    </table>
  </div>
</nav>
	<?php endif ?>
	
</html>

