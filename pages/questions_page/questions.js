
  const materialsData = [
    {
      Name: "اسئلة نصفي 2018 خريف",
      image: "/imgs/exam.png",
      link : "www.google.com"
    },
    {
      Name: "سئلة نصفي 2018ربيع",
      image: "/imgs/exam.png",
      link : "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s"
    },
    {
      Name: "اسئلة نصفي 2018 خريف",
      image: "/imgs/exam.png",
      link : "www.google.com"
    },
    {
      Name: "سئلة نصفي 2018ربيع",
      image: "/imgs/exam.png",
      link : "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s"
    },
    {
      Name: "اسئلة نصفي 2018 خريف",
      image: "/imgs/exam.png",
      link : "www.google.com"
    },
    {
      Name: "سئلة نصفي 2018ربيع",
      image: "/imgs/exam.png",
      link : "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s"
    },
    {
      Name: "اسئلة نصفي 2018 خريف",
      image: "/imgs/exam.png",
      link : "www.google.com"
    },
    {
      Name: "سئلة نصفي 2018ربيع",
      image: "/imgs/exam.png",
      link : "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s"
    },
    {
      Name: "اسئلة نصفي 2018 خريف",
      image: "/imgs/exam.png",
      link : "www.google.com"
    },
    {
      Name: "سئلة نصفي 2018ربيع",
      image: "/imgs/exam.png",
      link : "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s"
    },
  ];

  function createMaterialsList() {
    const materialsList = document.getElementById("materials-list");

    materialsData.forEach(material => {
      const li = document.createElement("li");
      li.className = "questions me-2 ms-5 ";

      const a = document.createElement("a");
      a.className = "pdfitems";
      a.href = material.link;

      const text = document.createTextNode(material.Name);
      a.appendChild(text);

      const img = document.createElement("img");
      img.className = "imgass";
      img.src = material.image;
      img.alt = material.Name;
      li.appendChild(img);
      li.appendChild(a);
      materialsList.appendChild(li);
    });
  }

  createMaterialsList();

  document.addEventListener("DOMContentLoaded", function() {
    var linkElements = document.querySelectorAll('a');
    linkElements.forEach(function(linkElement) {
      if (linkElement.textContent.trim() === 'الفصل السابع') {
        linkElement.addEventListener("click", function(event) {
          event.preventDefault();
          var targetUrl = "../subjects_page/subjects.html";
          window.location.href = targetUrl;
        });
      }
      if (linkElement.textContent.trim() === 'المناهج') {
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
