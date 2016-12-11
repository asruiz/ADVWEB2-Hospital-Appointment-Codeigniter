<!-- <hr/>
<!--<footer>
    <div class="row">
        <div class="col-lg-12" style="background-color: rgba(0,0,0,0.4); color: white;">
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </div>
</footer>
</div> -->
    <script type="text/javascript">
     function makeTableScroll() {
         // Constant retrieved from server-side via JSP
         var maxRows = 20;
         var table = document.getElementById('myTable');
         var wrapper = table.parentNode;
         var rowsInTable = table.rows.length;
         var height = 0;
         if (rowsInTable > maxRows) {
             for (var i = 0; i < maxRows; i++) {
                 height += table.rows[i].clientHeight;
             }
             wrapper.style.height = height + "px";
         }
     }
     </script>

    <script src="<?php echo base_url("assets/js/jquery.js")?>"></script>
    <script  src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/jquery-easing.min.js")?>"></script>
    <script src= "<?php echo base_url("assets/js/jqBootstrapValidation.js")?>"></script>
    <script src= "<?php echo base_url("assets/js/contact_me.js")?>"></script>
    <script src= "<?php echo base_url("assets/js/agency.js")?>"></script>
</body>

</html>
