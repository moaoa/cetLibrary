document.addEventListener("DOMContentLoaded", function() {
    var linkElements = document.querySelectorAll('a');
    linkElements.forEach(function(linkElement) {
      if (linkElement.textContent.trim() === 'الرئسية') {
        linkElement.addEventListener("click", function(event) {
          event.preventDefault();
          var targetUrl = "../subjects_page/subjects.html";
          window.location.href = targetUrl;
        });
      }
      if (linkElement.textContent.trim() === 'اختر تخصصك') {
        linkElement.addEventListener("click", function(event) {
          event.preventDefault();
          var targetUrl = "../semester/semester.html";
          window.location.href = targetUrl;
          
        });
      }
      if (linkElement.textContent.trim() === 'المشاركات') {
        linkElement.addEventListener("click", function(event) {
          event.preventDefault();
          var targetUrl = "../posting_page/posting_page.html";
          window.location.href = targetUrl;
          
        });
      }
    });
  });
