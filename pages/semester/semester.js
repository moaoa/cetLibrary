document.addEventListener("DOMContentLoaded", function() {
    var linkElements = document.querySelectorAll('a');
    linkElements.forEach(function(linkElement) {
      if (linkElement.textContent.trim() === 'الفصل السابع-هندسة برمجيات') {
        linkElement.addEventListener("click", function(event) {
          event.preventDefault();
          var targetUrl = "../subjects_page/subjects.html";
          window.location.href = targetUrl;
        });
      }
      if (linkElement.textContent.trim() === ' اختر تخصصك') {
        linkElement.addEventListener("click", function(event) {
          event.preventDefault();
          var targetUrl = "semester.html";
          window.location.href = targetUrl;
        });
      }
    });
  });
