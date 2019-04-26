$( document ).ready(function() {
    $(".admin_val").on( "click", function() {
        console.log($(".admin_val:checked").val());
            if ($("#admin_yes:checked").val() == 'yes') {
        confirm("Are you sure?");
    }


    });
}); //don't delete!!!!!


function validateFormInput() {
    console.log($(".admin_val").val());
    const forms = document.querySelectorAll('form');
    const form = forms[0];
    let not_empty = "";
    $('.req_message').remove();
    $("input").css('background-color', 'transparent');
    [...form.elements].forEach((input) => {
        if(input.type != "submit" && input.type != "radio" && input.value === "") {
        not_empty = false;
        let input_id = `#${input.id}`;
        $(input_id).css('background-color', 'rgba(252, 92, 101, .3)');
        // $(input_id).addClass("form_error");
        $(input_id).parent().append(`<p class="req_message">Required</p>`);

        }
    });
    return not_empty;
}





