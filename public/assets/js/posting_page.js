document.addEventListener("DOMContentLoaded", function () {
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

        if (!file) {
            resultSection.innerHTML = `
                        <div style="color: red">
                        الرجاء ارفاق الملف
                        </div>
                    `;
            return;
        }

        const formData = new FormData();
        formData.append("file", file);

        resultSection.innerText = "جاري الرفع ...";

        fetch(`${config.appUrl}/api/file`, {
            method: "post",
            body: formData,
        })
            .then((res) => {
                if (res.status === 419) {
                    resultSection.innerHTML = `
                    <div style="color: red">
                    يجب ان يكون الملف من نوع بي دي اف<br/>
                    وان لا يتجاوز حجمه 2 ميغا بايت
                    </div>
                    `;
                    return;
                }

                if (res.status === 500) {
                    resultSection.innerHTML = `
                        <div style="color: red">
                        حدث خطا
                        </div>
                    `;
                    return;
                }

                dropZoneHeading.innerText = "قم بسحب وإفلات الملف هنا";
                resultSection.innerText = "تم الارسال بنجاح";
            })
            .catch((e) => {
                console.log(e);
            });
    });
});
