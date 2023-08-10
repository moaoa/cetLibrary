document.addEventListener("DOMContentLoaded", function() {
  var linkElements = document.querySelectorAll('a');
  var buttonElements = document.querySelectorAll('button');

  linkElements.forEach(function(linkElement) {
    if (linkElement.textContent.trim() === 'الفصل السابع') {
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
  });

  
  buttonElements.forEach(function(buttonElement) {
    if (buttonElement.textContent.trim() === 'الاسئلة') {
      buttonElement.addEventListener("click", function(event) {
        event.preventDefault();
        var targetUrl = "../questions_page/questions.html";
        window.location.href = targetUrl;
      });
    }
    if (buttonElement.textContent.trim() === 'المناهج') {
      buttonElement.addEventListener("click", function(event) {
        event.preventDefault();
        var targetUrl = "../study_materials_page/study_materials.html";
        window.location.href = targetUrl;
      });
    }
  });
});
