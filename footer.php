
    <footer class="footer">
      <div class="container grid-div">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg contact-btn center-block" data-toggle="modal" data-target="#myModal" id="contact-btn">
          Contact me <span class="glyphicon glyphicon-envelope"></span>
        </button>

      </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Contact me</h4>
          </div>
          <div class="modal-body">

            <?php
              if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
            ?>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>





    <?php wp_footer(); ?>

</body>

</html>
