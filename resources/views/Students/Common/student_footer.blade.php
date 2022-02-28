  <!-- jQuery -->
  <script src="{{asset('Student/vendor/jquery.min.js')}}"></script>

  <!-- Bootstrap -->
  <script src="{{asset('Student/vendor/popper.min.js')}}"></script>
  <script src="{{asset('Student/vendor/bootstrap.min.js')}}"></script>

  <!-- Perfect Scrollbar -->
  <script src="{{asset('Student/vendor/perfect-scrollbar.min.js')}}"></script>

  <!-- DOM Factory -->
  <script src="{{asset('Student/vendor/dom-factory.js')}}"></script>

  <!-- MDK -->
  <script src="{{asset('Student/vendor/material-design-kit.js')}}"></script>

  <!-- App JS -->
  <script src="{{asset('Student/js/app.js')}}"></script>

  <!-- Preloader -->
  <script src="{{asset('Student/js/preloader.js')}}"></script>

  <!-- Global Settings -->
  <script src="{{asset('Student/js/settings.js')}}"></script>

  <!-- Flatpickr -->
  <script src="{{asset('Student/vendor/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('Student/js/flatpickr.js')}}"></script>

  <!-- Moment.js -->
  <script src="{{asset('Student/vendor/moment.min.js')}}"></script>
  <script src="{{asset('Student/vendor/moment-range.js')}}"></script>

  <!-- Chart.js -->
  <script src="{{asset('Student/vendor/Chart.min.js')}}"></script>
  <script src="{{asset('Student/js/chartjs.js')}}"></script>

  <!-- Chart.js Samples -->
  <script src="{{asset('Student/js/page.student-dashboard.js')}}"></script>

  <!-- List.js -->
  <script src="{{asset('Student/vendor/list.min.js')}}"></script>
  <script src="{{asset('Student/js/list.js')}}"></script>

  <!-- Tables -->
  <script src="{{asset('Student/js/toggle-check-all.js')}}"></script>
  <script src="{{asset('Student/js/check-selected-row.js')}}"></script>

  @toastr_js
  @toastr_render

  <script>
    $(document).ready(function()
    {
      $('.alert_message').click(function()
      {
          alert("Please Complete your Profile to Access the Test!!!");
      });
    });
  </script>

  <script>
    $('#profile_picture').change(function() { 
    // select the form and submit
    $('#profile-pic').submit(); 
});
  </script>

<script>

  $(document).ready(function() {

        $("#send_form").click(function(e){

            e.preventDefault();

            var place = $("input[name='place']").val();

            var date = $("input[name='date']").val();

            // alert(place);
            // alert(date);
            $.ajax({

              url:"{{ url('save-date-place') }}",

                type:'POST',

                data: { "_token": "{{ csrf_token() }}", place:place, date:date},

                success: function(data) {

                  $('#exampleModal').modal('hide');

                    if($.isEmptyObject(data.error)){

                      toastr.success(data.success);

                    }else{

                      toastr.error(data.error);

                    }

                }

            });

       

        }); 

       

        function printErrorMsg (msg) {

            $(".print-error-msg").find("ul").html('');

            $(".print-error-msg").css('display','block');

            $.each( msg, function( key, value ) {

                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

            });

        }

    });

</script>

