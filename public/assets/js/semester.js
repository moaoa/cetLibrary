document.addEventListener("DOMContentLoaded", async function () {
    try {
        const res = await fetch(window.config.appUrl + "/api/department");
        const data = await res.json();
        console.log(data);
    } catch (error) {
        console.log(error);
    }
});
