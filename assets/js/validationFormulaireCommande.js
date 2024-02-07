$(document).ready(function (){

    function verif()
    {
        var envoi = true;
        var input = $("[id^=req_]");
        var er_small= $("[id^=req_]+small");
        console.log(input)
        $(input).each(function()
                  {
                    if (input.val() == "")
                    {
                    envoi = false;
                    $(input).addClass("alert alert-danger")
                    $(er_small).html("Ce champ est obligatoire")
                    $(er_small).addClass("text-danger mt-0 pt-0 mb-3");
                    }
                    else {envoi==true}
                  });
    }
    $("#envoyer").click(function (e) {
        e.preventDefault();
        verif();})
});

