<script>
  $(function () {

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })


      // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

  })


  // Get the current page name from the URL
var currentPage = window.location.href.split('/').pop();

// Select all elements with class 'sidebar-link' and set the active class based on the current page
document.querySelectorAll('.nav-link').forEach(function(link) {
    var linkPage = link.getAttribute('href').split('/').pop();
    link.classList.toggle('active', linkPage === currentPage);

    // Check if the link has the 'active' class and add 'nav-item' and 'open-menu' to its grand-grandparent
    if (link.classList.contains('active')) {
        var grandparentUl = link.parentNode.parentNode; // Get the parent (li)
        var grandGrandparentLi = grandparentUl.parentNode; // Get the grandparent (ul)
        grandGrandparentLi.classList.add('menu-open');
    }

});


$(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

  })


  function formatCardNumber() {
  // Get the input element
  var cardNumberInput = document.getElementById('visaCardNumber');
  
  // Remove non-numeric characters
  var cleanedNumber = cardNumberInput.value.replace(/\D/g, '');

  // Limit the input to 16 numbers
  cleanedNumber = cleanedNumber.slice(0, 16);

  // Split the number into groups of four digits
  var formattedNumber = cleanedNumber.replace(/(\d{4})/g, '$1 ');

  // Update the input value
  cardNumberInput.value = formattedNumber.trim();
}

</script>