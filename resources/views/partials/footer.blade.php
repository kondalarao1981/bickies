<!-- footer start-->
<div class="container-fluid">
    <footer class="footer">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright <span id="currentYear"></span> &copy; Bickies</p>
            </div>
        </div>
    </footer>
</div>
<!-- footer End-->

<script>
  var currentYear = new Date().getFullYear();
  document.getElementById('currentYear').innerHTML = currentYear;
</script>