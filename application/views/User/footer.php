    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assist/js/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript">
        /* Set the width of the side navigation to 250px */
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script>
      $(document).ready( function () {
          $('#mytableId').DataTable();
      } );
    </script>
  </body>
</html>