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

        var myLink = document.getElementById('nav_item');
        myLink.classList.add('active');
    }

});



</script>