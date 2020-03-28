<div class="footer">
    <div class="row">
        <div class="col-lg-12">
            &copy; <?php echo date("Y"); ?> Maputo | Design by: <a href="https://github.com/Elio-dark/" style="color:#fff;" target="_blank">Elliot-Tech</a>
        </div>
    </div>
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script type="text/javascript" src="../lib/jquery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
<script src="../lib/js/jquery-3.4.1.min.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="../lib/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/static.js"></script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
</script>
</body>
</html>