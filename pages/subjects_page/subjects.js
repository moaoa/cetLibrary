document.addEventListener("DOMContentLoaded", function() {
  var linkElements = document.querySelectorAll('a');
  linkElements.forEach(function(linkElement) {
    if (linkElement.textContent.trim() === 'اختبار برمجات') {
      linkElement.addEventListener("click", function(event) {
        event.preventDefault();
        var targetUrl = "../study_materials_page/study_materials.html";
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
  });
});