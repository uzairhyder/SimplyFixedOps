function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $("#imagePreview").css(
          "background-image",
          "url(" + e.target.result + ")"
        );
        $("#imagePreview").hide();
        $("#imagePreview").fadeIn(650);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  $("#imageUpload").change(function () {
    readURL(this);
  });
  
  function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  
  jQuery(document).ready(function () {
    ImgUpload();
  });
  
  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];
  
    $(".uploadInputFile").each(function () {
      $(this).on("change", function (e) {
        imgWrap = $(this).closest(".uploadImgBox").find(".uploadImageWrap");
        var maxLength = $(this).attr("data-max_length");
  
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {
          if (!f.type.match("image.*")) {
            return;
          }
  
          if (imgArray.length > maxLength) {
            return false;
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);
  
              var reader = new FileReader();
              reader.onload = function (e) {
                var html =
                  "<div class='imageDetails'><div class='uploadImageBox'><div style='background-image: url(" +
                  e.target.result +
                  ")' data-number='" +
                  $(".uploadImageClose").length +
                  "' data-file='" +
                  f.name +
                  "' class='imageBackground'></div></div> <div class='inputField'><input type='text' class='signField' placeholder='Title'></div><div class='icons'><i class='bx bx-upload'></i><i class='bx bxs-trash uploadImageClose'></i></div></div>";
                imgWrap.append(html);
                iterator++;
              };
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });
  
    $("body").on("click", ".uploadImageClose", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
  }
  
  $(".toggle-password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });

   // nav background color
 $(window).scroll(function () {
    if ($(this).scrollTop() > 10) {
        $('.row-for-logo-and-ham-burger').addClass('mainNavbarClass');
    } else {
        $('.row-for-logo-and-ham-burger').removeClass('mainNavbarClass');
    }
    });
  
  
    // Hamburger
    var hamOpen = document.querySelector(".ham-open")
    var hamClose = document.querySelector(".ham-close")
    var sideBar = document.querySelector(".side-bar")
    var body = document.querySelector("body")
  
    hamOpen.addEventListener("click", function () {
    hamOpen.style.display = "flex",
        hamClose.style.display = "flex",
        sideBar.style.left = "0px"
    });

    hamClose.addEventListener("click", function () {
    hamOpen.style.display = "flex",
        hamClose.style.display = "flex",
        sideBar.style.left = "-100%"
    });

    $(function() {
      $("#mytabs a:first").tab("show");

      $(".next").on("click", function() {
          const $active = $(".tab-pane.active");
          const $next = $active.next();

          if ($next.length) {
              $active.removeClass("active show");
              $next.addClass("active show");
          }
      });

      $(".prev").on("click", function() {
          const $active = $(".tab-pane.active");
          const $prev = $active.prev();

          if ($prev.length) {
              $active.removeClass("active show");
              $prev.addClass("active show");
          }
      });
    });

    $(function() {

      // Initial hide div.
      $('#prev').hide();

      $('#next').click(function() {
          // Then show div on click.
          $('#next').hide();
          $('#prev').show();
      })
      $('#prev').click(function() {
        // Then show div on click.
        $('#next').show();
        $('#prev').hide();
    })
    })

    $("#prev").click(function() {
      if ($("#pre-test-ten").hasClass("active")) {
          $('#next').html(`<i class="fas fa-arrow-right"></i>`)
      } 
    });

    $("#next").click(function() {
      if ($("#pre-test-nine").hasClass("active")) {
          $('#next').html('Review')
      } 
    });

    $("#next").click(function() {
      if ($("#pre-test-ten").hasClass("active")) {
          $(".next").attr("href", "review-your-test.php")
      } 
    });

// active nav links
var url = window.location.href;
    
var links = document.querySelectorAll('.page-name');

links.forEach(

function(link) {
    
    if (link.href === url ) {
        
        link.classList.add('active');
        
    }
    
}

);

var base_url = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
if (base_url == "view-children-details.php") {
  $(".mc-link").addClass("active");
}
if (base_url == "skills.php") {
  $(".ls-link").addClass("active");
}
if (base_url == "review-your-test.php") {
  $(".ls-link").addClass("active");
}
if (base_url == "chat.php") {
  $(".c-link").addClass("active");
}