
  <!-- nice scroll -->
  <script src="layout/js/jquery.scrollTo.min.js"></script>
  <script src="layout/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="layout/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="layout/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  
  <script src="layout/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="layout/js/calendar-custom.js"></script>
    <script src="layout/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="layout/js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="layout/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="layout/js/sparkline-chart.js"></script>
    <script src="layout/js/easy-pie-chart.js"></script>
    <script src="layout/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="layout/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="layout/js/xcharts.min.js"></script>
    <script src="layout/js/jquery.autosize.min.js"></script>
    <script src="layout/js/jquery.placeholder.min.js"></script>
    <script src="layout/js/gdp-data.js"></script>
    <script src="layout/js/morris.min.js"></script>
    <script src="layout/js/sparklines.js"></script>
    <script src="layout/js/charts.js"></script>
    <script src="layout/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
