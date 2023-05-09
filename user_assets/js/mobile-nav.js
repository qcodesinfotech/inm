window.onload = function() {
  $("#mobile-btn").click(() => {
    $("#mobile-btn-1").click();
  });
  
  var mobHome = document.getElementById("mob-home");
  if (mobHome) {
    mobHome.addEventListener("click", function() {
      window.location.href = "index";
    });
  }
  var mobAbout = document.getElementById("mob-aboutus");
  if (mobAbout) {
    mobAbout.addEventListener("click", function() {
      window.location.href = "aboutus";
    });
  }
  var mobBook = document.getElementById("mob-book");
  if (mobBook) {
    mobBook.addEventListener("click", function() {
      window.location.href = "book";
    });
  }
  var mobVideo = document.getElementById("mob-video");
  if (mobVideo) {
    mobVideo.addEventListener("click", function() {
      window.location.href = "video";
    });
  }
  var mobPost = document.getElementById("mob-posts");
  if (mobPost) {
    mobPost.addEventListener("click", function() {
      window.location.href = "posts";
    });
  }
  var mobArticle = document.getElementById("mob-article");
  if (mobArticle) {
    // mobArticle.addEventListener("click", function() {
    //   window.location.href = "article";
    // });
  }

  var mobNavID = window.location.pathname;
  console.log(mobNavID);
  mobNavID = mobNavID.split("/inm/")[1];
  // mobNavID = mobNavID.split(
  //   "/Users/balaji/Documents/QCworkspace/IslamForNonMuslims/INM%2017Apr/inm/"
  // )[1];

  mobNavID = mobNavID.split(".")[0];
  if (mobNavID == "index" || !mobNavID) {
    mobNavID = "home";
  }
  const navbg = document.getElementById("mob-" + mobNavID);
  const navcolor = document.getElementById("mob-" + mobNavID + "-text");
  if (navbg) {
    navbg.style.backgroundColor = "white";
    navcolor.style.color = "black";
  }
};

function darken_screen(yesno) {
  if (yesno == true) {
    document.querySelector(".screen-darken").classList.add("active");
  } else if (yesno == false) {
    document.querySelector(".screen-darken").classList.remove("active");
  }
}

function close_offcanvas() {
  darken_screen(false);
  document.querySelector(".mobile-offcanvas.show").classList.remove("show");
  document.body.classList.remove("offcanvas-active");
}

function show_offcanvas(offcanvas_id) {
  darken_screen(true);
  document.getElementById(offcanvas_id).classList.add("show");
  document.body.classList.add("offcanvas-active");
}

document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll("[data-trigger]").forEach(function(everyelement) {
    let offcanvas_id = everyelement.getAttribute("data-trigger");

    everyelement.addEventListener("click", function(e) {
      e.preventDefault();
      show_offcanvas(offcanvas_id);
    });
  });

  document.querySelectorAll(".btn-close").forEach(function(everybutton) {
    everybutton.addEventListener("click", function(e) {
      e.preventDefault();
      close_offcanvas();
    });
  });

  document
    .querySelector(".screen-darken")
    .addEventListener("click", function(event) {
      close_offcanvas();
    });
});
