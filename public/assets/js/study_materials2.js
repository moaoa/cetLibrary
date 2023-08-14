const materialsData = [
    {
        Name: "منهج محمد د. الفرجاني (رحمه الله)",
        image: "/imgs/presentations.png",
        link: "www.google.com",
    },
    {
        Name: "IEEE 829",
        image: "/imgs/note.png",
        link: "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s",
    },
    {
        Name: "IEEE 829 (1) ",
        image: "/imgs/note.png",
        link: "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s",
    },

    {
        Name: "IEEE 829 (2) ",
        image: "/imgs/note.png",
        link: "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s",
    },
    {
        Name: "اختبار برمجيات ",
        image: "/imgs/folder.png",
        link: "www.google.com",
    },
    {
        Name: "IEEE 829(3)",
        image: "/imgs/note.png",
        link: "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s",
    },
    {
        Name: "IEEE 829(4)",
        image: "/imgs/note.png",
        link: "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s",
    },
    {
        Name: "IEEE 829(5)",
        image: "/imgs/note.png",
        link: "https://www.youtube.com/watch?v=8dWL3wF_OMw&t=20392s",
    },
];

function createMaterialsList() {
    const materialsList = document.getElementById("materials-list");

    materialsData.forEach((material) => {
        const li = document.createElement("li");
        li.className =
            "mnahg col-12 mb-4 me-2 ms-2 mt-2 pr-2 d-flex justify-content-end align-items-end";

        const a = document.createElement("a");
        a.className = "pdfitems";
        a.href = material.link;

        const text = document.createTextNode(material.Name);
        a.appendChild(text);

        const img = document.createElement("img");
        img.className = "imgass";
        img.src = material.image;
        img.alt = material.Name;

        li.appendChild(a);
        li.appendChild(img);

        materialsList.appendChild(li);
    });
}

createMaterialsList();

document.addEventListener("DOMContentLoaded", function () {});
