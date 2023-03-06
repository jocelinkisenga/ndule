<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{env('APP_NAME')}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}"> 
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('Client/assets/css/style.css')}}">

</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include("Admin.navs.navbar")
    @include("Admin.navs.aside")

    @yield("content")
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
    @include("Admin.navs.footer")
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script> --}}
    <!-- Bootstrap -->
 
    <!-- overlayScrollbars -->
   
    <!-- PAGE admin/plugins -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('Client/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('Client/assets/js/printThis.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <!-- ChartJS -->
   
  
  
    <!-- AdminLTE for demo purposes -->

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    
    <script>
        //nav bar function

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }



        //Create PDf from HTML...
        function CreatePDFfromHTML() {
            var HTML_Width = $(".html-content").width();
            var HTML_Height = $(".html-content").height();
            var top_left_margin = 15;
            var PDF_Width = HTML_Width + (top_left_margin * 2);
            var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
            var canvas_image_width = HTML_Width;
            var canvas_image_height = HTML_Height;

            var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

            html2canvas($(".html-content")[0]).then(function(canvas) {
                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
                pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width,
                    canvas_image_height);
                for (var i = 1; i <= totalPDFPages; i++) {
                    pdf.addPage(PDF_Width, PDF_Height);
                    pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4),
                        canvas_image_width, canvas_image_height);
                }
                pdf.save("mafacture.pdf");
                $(".html-content").hide();
            });
        }

        // print facture 
        function myPrintFunction(){
            var printable = document.getElementById('.html-content');
            $('.html-content').printThis({
                // debug: false, // show the iframe for debugging
                // importCSS: false, // import parent page css
                // importStyle: true, // import style tags
                // printContainer: true, // print outer container/$.selector
                // loadCSS: "admin/dist/css/adminlte.min.css", // path to additional css file - use an array [] for multiple
                pageTitle: "ma facture", // add title to print page
                // removeInline: false, // remove inline styles from print elements
                // removeInlineSelector: "*", // custom selectors to filter inline styles. removeInline must be true
                // printDelay: 333, // variable print delay
                // header: null, // prefix to html
                // footer: null, // postfix to html
                // base: false, // preserve the BASE tag or accept a string for the URL
                // formValues: true, // preserve input/form values
                // canvas: false, // copy canvas content
                // doctypeString: '...', // enter a different doctype for older markup
                // removeScripts: false, // remove script tags from print content
                // copyTagClasses: false, // copy classes from the html & body tag
                // beforePrintEvent: null, // function for printEvent in iframe
                // beforePrint: null, // function called before iframe is filled
                // afterPrint: null // function called before iframe is removed
            });

            //      $("#myPrintable").printThis({
            //     debug: false, // show the iframe for debugging
            //     importCSS: false, // import parent page css
            //     importStyle: true, // import style tags
            //     printContainer: true, // print outer container/$.selector
            //     loadCSS: "admin/dist/css/adminlte.min.css", // path to additional css file - use an array [] for multiple
            //     pageTitle: "ma facture", // add title to print page
            //     removeInline: false, // remove inline styles from print elements
            //     removeInlineSelector: "*", // custom selectors to filter inline styles. removeInline must be true
            //     printDelay: 333, // variable print delay
            //     header: null, // prefix to html
            //     footer: null, // postfix to html
            //     base: false, // preserve the BASE tag or accept a string for the URL
            //     formValues: true, // preserve input/form values
            //     canvas: false, // copy canvas content
            //     doctypeString: '...', // enter a different doctype for older markup
            //     removeScripts: false, // remove script tags from print content
            //     copyTagClasses: false, // copy classes from the html & body tag
            //     beforePrintEvent: null, // function for printEvent in iframe
            //     beforePrint: null, // function called before iframe is filled
            //     afterPrint: null // function called before iframe is removed
            // });
        }

    </script>
<!-- overlayScrollbars -->
<script src="{{asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.js')}}"></script>
<script src="{{asset('Admin/dist/js/demo.js')}}"></script>
<!-- PAGE admin/plugins -->
<!-- jQuery Mapael -->
<script src="{{asset('Admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('Admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('Admin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('Admin/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>
