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
        let containing_div_text = input.id.split("_").pop();
        let containg_div_id = `#${containing_div_text}_input`;
        $(input_id).css('background-color', 'rgba(243, 156, 18, .7)');
        $(containg_div_id).append(`<p class="req_message">${containing_div_text} required.</p>`);
        }
    });
    return not_empty;
}





