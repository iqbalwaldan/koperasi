$(document).ready(function () {
    var owl = $(".owl-carousel");

    owl.owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
    });

    $(".main__hot-news-next").click(function () {
        owl.trigger("next.owl.carousel");
        console.log("next");
    });

    $(".main__hot-news-prev").click(function () {
        owl.trigger("prev.owl.carousel");
        console.log("prev");
    });

    let editorInstance;

    if (document.querySelector("#editor")) {
        console.log("editor");
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph,
            List,
        } = CKEDITOR;
        ClassicEditor.create(document.querySelector("#editor"), {
            plugins: [Essentials, Bold, Italic, Font, Paragraph, List],
            toolbar: [
                "undo",
                "redo",
                "|",
                "bold",
                "italic",
                "|",
                "fontSize",
                "|",
                "bulletedList",
                "numberedList",
            ],
        })
            .then((editor) => {
                editorInstance = editor; // Save the editor instance for later use
            })
            .catch((error) => {
                console.error("Error initializing CKEditor:", error);
            });
        $("#submit").click(function () {
            // Get data from CKEditor
            const editorData = editorInstance.getData();
            console.log(editorData);

            // You can now use editorData, e.g., send it via AJAX or display it
            // alert("Data from CKEditor: " + editorData);
        });
    }
});
