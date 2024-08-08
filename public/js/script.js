//  js for navigation link scroll into section wise
document.addEventListener("DOMContentLoaded", function () {
  const menuItems = document.querySelectorAll("a[data-section]");

  menuItems.forEach((item) => {
    item.addEventListener("click", function (event) {
      event.preventDefault();
      const sectionName = this.getAttribute("data-section");
      const element = document.getElementById(sectionName);

      if (element) {
        element.scrollIntoView({ behavior: "smooth" });
      }
    });
  });
});

document.querySelector(".contact-btn-animation")
  .addEventListener("click", function () {
    document.getElementById("footer").scrollIntoView({ behavior: "smooth" });
  });

// Js for video play pause in testimonial section
document.addEventListener("DOMContentLoaded", function () {
  var video = document.getElementById("video");
  var playPauseBtn = document.getElementById("playPause");
  var playPauseIcon = document.getElementById("playPauseIcon");
  if (playPauseBtn) {
    playPauseBtn.addEventListener("click", function () {
      if (video.paused) {
        video.play();
        playPauseIcon.src = "./images/pause_button.png"; // Change to pause image
        playPauseIcon.alt = "Pause";
      } else {
        video.pause();
        playPauseIcon.src = "./images/Play_button.png"; // Change to play image
        playPauseIcon.alt = "Play";
      }
    });
  }
});

// Js for dropdown icon change according dropdown open close behavior
document.addEventListener("DOMContentLoaded", function () {
  var dropbtn = document.querySelector(".dropbtn");
  var dropdown = document.querySelector(".dropdown");
  var dropdownContent = document.querySelector(".dropdown-content");
  var icon = document.querySelector(".fa-caret-down");

  dropbtn.addEventListener("click", function (event) {
    event.preventDefault();
    dropdownContent.classList.toggle("show");
    if (dropdownContent.classList.contains("show")) {
      icon.classList.add("rotate");
    } else {
      icon.classList.remove("rotate");
    }
  });

  document.addEventListener("click", function (event) {
    if (!dropdown.contains(event.target)) {
      dropdownContent.classList.remove("show");
      icon.classList.remove("rotate");
    }
  });
});

// Aos animation onSCroll
$(document).ready(function () {
  AOS.init({
    once: true, // Animation happens only once while scrolling down
    duration: 1200,
  });
});

//  owl-carousel slider for testimonial section
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    items: 2, // Show 2 items per view
    margin: 24,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2500000,
    autoplayHoverPause: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },
      1200: {
        items: 2,
      },
      1280: {
        items: 2,
      },
    },
  });
});

// contact us form submit
$(document).ready(function () {
  $("#contact-form").on("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Serialize form data into an object
    var formData = {
      userName: $(this).find('input[name=user_name]').val(),
      companyName: $(this).find('input[name=company_name]').val(),
      occupation: $('input[name="occupation"]:checked').val(),
      gstNumber: $(this).find('input[name=gst_number]').val(),
      phoneNumber: $(this).find('input[name=phone_number]').val(),
      phase: $('input[name="phase"]:checked').val(),
      quantityRange: $('input[name="quantity_range"]:checked').val(),
    };

    // AJAX request
    $.ajax({
      url: "/create", // Replace with your server URL
      type: "POST",
      data: formData, // Send data as a single variable
      headers: {
        'X-CSRF-TOKEN': $('input[name=_token]').val() // Add CSRF token in headers
      },
      success: function (response) {
        // Display a success message below the form
        $("#form-message").html('<p style="color: green; margin-top:10px;">Your enquiry form is submitted. We will get in touch with you soon.</p>');
        $("#contact-form")[0].reset(); // Optionally reset the form fields

        // Set timeout to hide the message after 3 seconds
        setTimeout(function () {
          $("#form-message").html('');
        }, 3000); // 3000 milliseconds = 3 seconds
      },
      error: function (xhr, status, error) {
        // Extract validation errors from the response
        var errors = xhr.responseJSON.errors;
        var errorMessage = '';

        // Concatenate validation error messages
        $.each(errors, function (key, messages) {
          errorMessage += messages.join('<br>') + '<br>';
        });

        // Display validation errors below the form
        $("#form-message").html('<p style="color: red;">' + errorMessage + '</p>');

        // Set timeout to hide the message after 3 seconds
        setTimeout(function () {
          $("#form-message").html('');
        }, 3000); // 3000 milliseconds = 3 seconds
      },
    });
  });
});


// see more / see less behavior for about us section
document.addEventListener("DOMContentLoaded", function () {
  const seeMoreBtn = document.getElementById("see-more-btn");
  const seeLessBtn = document.getElementById("see-less-btn");
  const fullText = document.querySelector(".full-text");
  const seeMoreSpan = document.querySelector(".see-more");

  if (seeMoreBtn) {
    seeMoreBtn.addEventListener("click", function () {
      fullText.classList.add("show");
      seeMoreSpan.classList.add("hide");
      seeMoreBtn.classList.add("hide");
      seeLessBtn.classList.add("show");
    });
  }

  if (seeLessBtn) {
    seeLessBtn.addEventListener("click", function () {
      fullText.classList.remove("show");
      seeMoreSpan.classList.remove("hide");
      seeMoreBtn.classList.remove("hide");
      seeLessBtn.classList.remove("show");
    });
  }
});

// see more / see less behavior for service request/warranty inquiry section
document.addEventListener("DOMContentLoaded", function () {
  const readMoreBtn1 = document.getElementById("read-more-btn1");
  const readLessBtn1 = document.getElementById("read-less-btn1");
  const fullText1 = document.querySelector(".full-text1");
  const seeMoreSpan1 = document.querySelector(".see-more1");

  if (readMoreBtn1) {
    readMoreBtn1.addEventListener("click", function () {
      fullText1.classList.add("show");
      seeMoreSpan1.classList.add("hide");
      readMoreBtn1.classList.add("hide");
      readLessBtn1.classList.add("show");
    });
  }

  if (readLessBtn1) {
    readLessBtn1.addEventListener("click", function () {
      fullText1.classList.remove("show");
      seeMoreSpan1.classList.remove("hide");
      readMoreBtn1.classList.remove("hide");
      readLessBtn1.classList.remove("show");
    });
  }
});

// menu close after click on nav link in mobile view
document.addEventListener("DOMContentLoaded", function () {
  // Select all nav links and dropdown links
  var navbarCollapse = document.querySelectorAll(
    ".navbar-nav .nav-link, .dropdown-content a"
  );
  // Select the contact button
  var contactBtn = document.querySelector(".contact-btn-animation");

  // Function to close the navbar
  function closeNavbar() {
    var navbarToggler = document.querySelector(".navbar-toggler");
    if (navbarToggler.offsetParent !== null) {
      // Check if the navbar-toggler is visible
      var bsCollapse = new bootstrap.Collapse(
        document.querySelector(".navbar-collapse")
      );
      bsCollapse.hide();
    }
  }

  // Add click event listener to nav links
  navbarCollapse.forEach(function (navLink) {
    navLink.addEventListener("click", closeNavbar);
  });

  // Add click event listener to the contact button
  if (contactBtn) {
    contactBtn.addEventListener("click", closeNavbar);
  }
});

//  add loader untill fully css load
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("load", function () {
    // Hide loader
    document.getElementById("loader").style.display = "none";
    // Show main content
    document.getElementById("content").style.display = "block";
  });
});