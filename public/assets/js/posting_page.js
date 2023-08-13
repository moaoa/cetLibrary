document.addEventListener("DOMContentLoaded", function () {
    var linkElements = document.querySelectorAll("a");
    linkElements.forEach(function (linkElement) {
        if (linkElement.textContent.trim() === "الرئسية") {
            linkElement.addEventListener("click", function (event) {
                event.preventDefault();
                var targetUrl = "../subjects_page/subjects.html";
                window.location.href = targetUrl;
            });
        }
        if (linkElement.textContent.trim() === "اختر تخصصك") {
            linkElement.addEventListener("click", function (event) {
                event.preventDefault();
                var targetUrl = "../semester/semester.html";
                window.location.href = targetUrl;
            });
        }
        if (linkElement.textContent.trim() === "المشاركات") {
            linkElement.addEventListener("click", function (event) {
                event.preventDefault();
                var targetUrl = "../posting_page/posting_page.html";
                window.location.href = targetUrl;
            });
        }
    });
    const dropZone = document.getElementById("dropzone");
    const postingForm = document.getElementById("file-upload-form");
    const dropZoneHeading = dropZone.querySelector("h6");
    const resultSection = document.getElementById("result");
    const events = ["dragenter", "dragover", "dragleave", "drop"];
    // Prevent default behaviors for drag and drop events
    events.forEach((eventName) => {
        dropZone.addEventListener(eventName, (e) => e.preventDefault(), false);
        document.body.addEventListener(
            eventName,
            (e) => e.preventDefault(),
            false
        );
    });

    let file = null;

    if (dropZone) {
        dropZone.addEventListener("drop", (e) => {
            e.preventDefault();
            const files = e.dataTransfer.files;
            file = files?.[0];
            dropZoneHeading.innerText = file["name"];
        });
    }

    postingForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const formData = new FormData();
        formData.append("file", file);

        resultSection.innerText = "جاري الرفع ...";
        fetch("http://localhost:8000/api/file", {
            method: "post",
            body: formData,
        })
            .then(() => {
                dropZoneHeading.innerText = "قم بسحب وإفلات الملف هنا";
                resultSection.innerText = "تم الارسال بنجاح";
            })
            .catch((e) => {
                resultSection.innerText = "فشل الارسال الرجاء المحاولة مجددا";
                console.log(e);
            });
    });
});
