 $(".btn-danger").on("click", function () {
        $.notify(
            {
                title: "<strong>Title</strong>",
                message: "<br>Facendo click su questa notifica",
                icon: 'fas fa-exclamation-triangle',
            },
            {
                type: "danger",
                allow_dismiss: true,
                delay: 3000,
                placement: {
                  from: "top",
                  align: "right"
                },
            }
        );
    });

    $(".btn-success").on("click", function () {
        $.notify(
            {
                title: "<strong>Title</strong>",
                message: "<br>Facendo click su questa notifica",
                icon: 'fas fa-check',
            },
            {
                type: "success",
                allow_dismiss: true,
                delay: 3000,
                placement: {
                  from: "top",
                  align: "right"
                },
            }
        );
    });
    