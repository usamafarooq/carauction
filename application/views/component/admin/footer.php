  <input type="hidden" value="<?php echo base_url() ?>" id="base_url">
  <script>!function(e,t,r,n,c,h,o){function a(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return r}try{for(c=e.getElementsByTagName('a'),o='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(h=c[n]).href.indexOf(o))>-1&&(h.href='mailto:'+a(h.href,t+o.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(h=c[n]).parentNode.replaceChild(e.createTextNode(a(h.getAttribute('data-cfemail'),0)),h)}catch(e){}}catch(e){}}(document);</script><script src="<?php echo base_url() ?>admin_assets/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/metisMenu/metisMenu.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- STRAT PAGE LABEL PLUGINS -->
          <script src="<?php echo base_url() ?>admin_assets/assets/plugins/fullcalendar/lib/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="<?php echo base_url() ?>admin_assets/assets/dist/js/app.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>
          <script src="<?php echo base_url() ?>admin_assets/assets/plugins/bootstrap-wizard/jquery.backstretch.min.js" type="text/javascript"></script>
                  <script src="<?php echo base_url() ?>admin_assets/assets/plugins/bootstrap-wizard/form.scripts.js" type="text/javascript"></script>



<script src="<?php  echo base_url() ?>admin_assets/assets/plugins/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/amcharts/ammap.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/amcharts/worldLow.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/amcharts/export.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/amcharts/light.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/amcharts/pie.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/amcharts/amstock.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/dist/js/app.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>


<script type="text/javascript">
    if ($('#editor1').length >= 1) {
    CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('editor1');
}
</script>
    </body>



     <!-- STRAT PAGE LABEL PLUGINS -->
        <script src="<?php echo base_url() ?>admin_assets/assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
        <!-- START THEME LABEL SCRIPT -->
        <!-- <script src="<?php echo base_url() ?>admin_assets/assets/dist/js/app.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>admin_assets/assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script> -->
        <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                $('#dataTableExample1').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
                    "iDisplayLength": 6
                });

                $("#dataTableExample2").DataTable({
                    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    buttons: [
                        {extend: 'copy', className: 'btn-sm'},
                        {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'print', className: 'btn-sm'}
                    ]
                });

            });
        </script>
        <script type="text/javascript">
 $(document).ready(function() {
    $("body").on("click",".add-more",function(){
        var html = $(".after-add-more").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".change").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-more"><strong> + </strong> </a>');
        $(".after-add-more").last().after(html);
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-more").remove();
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $("body").on("click",".add-kpi",function(){
        var html = $(".after-add-kpi").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-kpi"><strong> + </strong> </a>');
        $(".after-add-kpi").last().after(html);
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-kpi").remove();
    });
});
</script>
   <script>
                    // $(function() {
                    //     $('#toggle-two').bootstrapToggle({
                    //         on: 'Yes',
                    //         off: 'No'
                    //     });
                    // })
                </script>




</html>
