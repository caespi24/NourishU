$(document).ready(function(){
    // Modal init
    $('.modal').modal();

    // Carousel init
    $('.carousel').carousel({
        padding: 100,
        numVisible: 3
    });

    // Carousel-slider init
    $('.cs').carousel({
        dist: 0,
        shift: -50
    });

    $('.pdri-cs').carousel({
        fullWidth: true,
        indicators: false,
        noWrap: true
    });

     // function for carousel autoplay (main-cs)
    setInterval(function(){
    $('.main-cs').carousel('next');
    }, 5000);

     // function for carousel autoplay (cs)
    setInterval(function(){
        $('.cs').carousel('next');
    }, 5000);

    // Floating Action Button init
    $('.fixed-action-btn').floatingActionButton({
        direction: 'top'
    });

    // Dropdown init
    $('.dropdown-trigger').dropdown();

    // Sidenav init
    $('.sidenav').sidenav({
      edge: 'right'
    });

    // Select init
    // $('select').formSelect();

    // Datepicker init
    $('.datepicker').datepicker({
      defaultDate: new Date(),
      setDefaultDate: true,
    //  format: 'yyyy-mm-dd' // Adjust the format as per your requirement
     });

    $('.bdate-up').datepicker({
      format: 'yyyy-mm-dd', // Set the format to match your database date format
      // defaultDate: new Date('<?php echo $userInfo['BDATE']; ?>'), // Use the date from your database as the default
      setDefaultDate: true
    });

    // Tabs init
    $('.tabs').tabs();
})

flatpickr("#datetimePicker", {
    enableTime: true,
    dateFormat: "m-d-Y H:i",
});

$('.fdcid').on('click', function() {
    $(this).addClass('active');
    $('.fdname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.cname').removeClass('active');
    $('.eportion').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.fats').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.fdname').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.cname').removeClass('active');
    $('.eportion').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.fats').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.fgroup').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.eportion').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.fats').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.cname').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.eportion').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.fats').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.fgroup').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.eportion').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.fats').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.eportion').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.fats').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.protein').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.eportion').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.fats').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.energy').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.protein').removeClass('active');
    $('.eportion').removeClass('active');
    $('.carbs').removeClass('active');
    $('.fats').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.carbs').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.eportion').removeClass('active');
    $('.fats').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.fats').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.eportion').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.fiber').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.eportion').removeClass('active');
    $('.fats').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.vitc').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.eportion').removeClass('active');
    $('.fiber').removeClass('active');
    $('.fats').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.calc').removeClass('active');
});

$('.vitb12').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.eportion').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.fats').removeClass('active');
    $('.calc').removeClass('active');
});

$('.calc').on('click', function() {
    $(this).addClass('active');
    $('.fdcid').removeClass('active');
    $('.fdname').removeClass('active');
    $('.cname').removeClass('active');
    $('.fgroup').removeClass('active');
    $('.protein').removeClass('active');
    $('.energy').removeClass('active');
    $('.carbs').removeClass('active');
    $('.eportion').removeClass('active');
    $('.fiber').removeClass('active');
    $('.vitc').removeClass('active');
    $('.vitb12').removeClass('active');
    $('.fats').removeClass('active');
});

$('.username').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.sex').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.email').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.username').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.sex').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.password').on('click', function() {
    $(this).addClass('active');
    $('.username').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.sex').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.fname').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.username').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.sex').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.lname').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.username').removeClass('active');
    $('.age').removeClass('active');
    $('.sex').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.age').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.username').removeClass('active');
    $('.sex').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.sex').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.username').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.bdate').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.sex').removeClass('active');
    $('.username').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.weight').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.sex').removeClass('active');
    $('.bdate').removeClass('active');
    $('.username').removeClass('active');
    $('.height').removeClass('active');
});

$('.height').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.sex').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.username').removeClass('active');
});

document.addEventListener('DOMContentLoaded', function(){
    var carouselHeight = window.innerHeight;
    var elems = document.querySelectorAll('.pdri-cs');
    for(var i = 0; i < elems.length; i++){
        elems[i].style.height = carouselHeight + 'px';
    }
});

document.addEventListener('DOMContentLoaded', function() {

  // Assume there is only one instance of the 'pdri-cs' carousel for simplicity
  var carouselInstance = M.Carousel.getInstance(carouselElems[0]);

  // Function to check and prevent swiping past ends
  function checkSwipe(e) {
    let direction = e.type === 'carouselNext' ? 'next' : 'prev';
    let activeIndex = carouselInstance.center;
    let totalItems = carouselInstance.items.length;

    if (direction === 'next' && activeIndex === totalItems - 1) {
      // Prevent swipe to the next slide if we're at the last slide
      e.stopPropagation();
    } else if (direction === 'prev' && activeIndex === 0) {
      // Prevent swipe to the previous slide if we're at the first slide
      e.stopPropagation();
    }
  }

  // Add event listeners to the carousel instance
  carouselInstance.el.addEventListener('carouselNext', checkSwipe);
  carouselInstance.el.addEventListener('carouselPrev', checkSwipe);
});

// Initialize Flatpickr
document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#datetimePicker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var selectElem = document.getElementById('lunit');
    var selectElem1 = document.getElementById('lserving');
    var selectElem2 = document.getElementById('lunit1');
    var selectElem3 = document.getElementById('lserving1');
    var selectElem4 = document.getElementById('frequency');
    var selectElem5 = document.getElementById('fgroup');
    var hiddenInput = document.getElementById('hiddenUnit1');
    var hiddenInput1 = document.getElementById('hiddenUnit2');
    var hiddenInput2 = document.getElementById('hiddenUnit3');
    var hiddenInput3 = document.getElementById('hiddenUnit4');
    var hiddenInput4 = document.getElementById('hiddenUnit5');
    var hiddenInput5 = document.getElementById('hiddenUnit6');
    M.FormSelect.init(selectElem);
    M.FormSelect.init(selectElem1);
    M.FormSelect.init(selectElem2);
    M.FormSelect.init(selectElem3);
    M.FormSelect.init(selectElem4);
    M.FormSelect.init(selectElem5);

    // Update hidden input on change
    selectElem.onchange = function() {
          var selectedValue = selectElem.value;
          hiddenInput.value = selectedValue; // Update hidden input value
      };
    selectElem1.onchange = function() {
            var selectedValue1 = selectElem1.value;
            hiddenInput1.value = selectedValue1; // Update hidden input2 value
        };
     selectElem2.onchange = function() {
              var selectedValue2 = selectElem2.value;
              hiddenInput2.value = selectedValue2; // Update hidden input3 value
          };
     selectElem3.onchange = function() {
                var selectedValue3 = selectElem3.value;
                hiddenInput3.value = selectedValue3; // Update hidden input4 value
            };
      selectElem4.onchange = function() {
                var selectedValue4 = selectElem4.value;
                hiddenInput4.value = selectedValue4; // Update hidden input4 value
                   };
      selectElem5.onchange = function() {
                  var selectedValue5 = selectElem5.value;
                  hiddenInput5.value = selectedValue5; // Update hidden input4 value
                  };
});

function confirmDelete(id) {
    if (confirm('Are you sure you want to delete this record?')) {
        window.location.href = 'deleteScript.php?id=' + id;
    }
}

$(document).ready(function(){
    // Initialize modal
    $('.modal').modal();

    // Handle click event of edit buttons
    $('.edit-btn').on('click', function(){
        var id = $(this).data('id');
        var tr = $(this).closest('tr');
        var foodName = tr.find('td:eq(0)').text();
        var date = tr.find('td:eq(2)').text(); // Ensure this matches the format expected by your DateTime picker
        var unit = tr.find('td:eq(5)').text();
        var serving = tr.find('td:eq(6)').text();

        // Populate modal fields
        $('#modal1').find('#record_id').val(id);
        $('#modal1').find('#fdname').val(foodName); // Ensure 'foodName' holds the correct value
        // Convert date format if necessary before setting it
        $('#modal1').find('[name="datetime"]').val(date);
        // For select fields, you might need to set them like this:
        $('#modal1').find('[name="lunit"]').val(unit).formSelect(); // Re-initialize Materialize select
        $('#modal1').find('[name="lserving"]').val(serving).formSelect();

        // Open the modal
        $('#modal1').modal('open');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var mySwitch = document.getElementById('mySwitch');
    var fname = document.getElementById('fname');
    var lname = document.getElementById('lname');
    var bdate = document.getElementById('bdate');
    var age = document.getElementById('age');
    var sex = document.getElementById('sex');
    var weight = document.getElementById('weight');
    var height = document.getElementById('height');
    var edit = document.getElementById('edit-btn');

    // Listen for change events on the switch
    mySwitch.addEventListener('change', function() {
        // Enable the input if the switch is checked, disable otherwise
        if(this.checked){
          fname.removeAttribute('disabled');
          lname.removeAttribute('disabled');
          bdate.removeAttribute('disabled');
          age.removeAttribute('disabled');
          sex.removeAttribute('disabled');
          weight.removeAttribute('disabled');
          height.removeAttribute('disabled');
          edit.removeAttribute('disabled');
        }
        else{
          fname.setAttribute('disabled', true);
          lname.setAttribute('disabled', true);
          bdate.setAttribute('disabled', true);
          age.setAttribute('disabled', true);
          sex.setAttribute('disabled', true);
          weight.setAttribute('disabled', true);
          height.setAttribute('disabled', true);
          edit.setAttribute('disabled', true);
          $('.fname').removeClass('active');
          $('.lname').removeClass('active');
          $('.age').removeClass('active');
          $('.sex').removeClass('active');
          $('.bdate').removeClass('active');
          $('.weight').removeClass('active');
          $('.height').removeClass('active');
        }

    });
});
//
// $(document).ready(function(){
//   $("#search").on("keyup", function(){
//     var query = $(this).val();
//     if (query.length > 0) {
//       $.ajax({
//         url:"fetch_suggestions.php",
//         method:"POST",
//         data:{query:query},
//         success:function(data){
//           $("#autocomplete").html(data);
//           $("#autocomplete").css("display", "block");
//         }
//       });
//     } else {
//       $("#autocomplete").css("display", "none");
//     }
//   });
// });
//
// $(document).on("click", "#autocomplete li", function(){
//   $("#search").val($(this).text());
//   $("#autocomplete").css("display", "none");
// });












//
// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.datepicker');
//     var instances = M.Datepicker.init(elems, {
//         defaultDate: new Date(),
//         setDefaultDate: true,
//         format: 'yyyy-mm-dd', // Format the date as you need
//         onClose: function() {
//             var instance = M.Datepicker.getInstance(document.getElementById('date-picker-modal'));
//             var selectedDate = instance.toString();
//             fetchDataForDate(selectedDate);
//         }
//     });
//     // Fetch data for today on initial page load
//    fetchDataForDate(new Date().toISOString().split('T')[0]);
// });
//
// // Define the function to fetch data based on the selected date
// function fetchDataForDate(formattedDate) {
//     console.log("Fetching data for date:", formattedDate); // Check if the date is correct
//
//     // Your AJAX call
//     $.ajax({
//         url: 'fetch_data.php', // Make sure this URL is correct
//         type: 'POST',
//         data: {date: formattedDate},
//         success: function(data) {
//             console.log("Data received:", data); // Check the data received from the server
//             $('table tbody').html(data);
//         },
//         error: function(xhr, status, error) {
//             console.error("Error fetching data:", error);
//         }
//     });
// }




// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.tabs');
//     var options = {};
//     var instances = M.Tabs.init(elems, options);
// });
