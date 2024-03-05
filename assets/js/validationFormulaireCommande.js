$(document).ready(function (){

    function verif()
    {
        var envoi = true;
        var regEx= new RegExp(/[A-Za-z\-]+\s[A-Za-z\-]+/);
        var nom_prenom= $("#req_nom_prenom").val();
        // var x = $("[id^=req_]");       
        // var er_small= $("[id^=req_]+small");
        // $(x).each(function()
        //           {
        //             if (x.val() == "")
        //             {
        //             envoi = false;
        //             $(x).addClass("alert alert-danger")
        //             $('#er_'+x).html("Ce champ est obligatoire")
        //             $().addClass("text-danger mt-0 pt-0 mb-3");
        //             };                    
        //           });
        if (nom_prenom == "")
                    {
                    envoi = false;
                    $("#req_nom_prenom").addClass("alert alert-danger")
                    $("#er_nom_prenom").html("Ce champ est obligatoire")
                    $("#er_nom_prenom").addClass("text-danger mt-0 pt-0 mb-3");
                    }; 
          
        if ($("#req_mail").val() == "")
        {
          envoi = false;
          $("#req_mail").addClass("alert alert-danger")
          $("#er_mail").html("Ce champ est obligatoire")
          $("#er_mail").addClass("text-danger mt-0 pt-0 mb-3");
        };
        if ($("#req_telephone").val() == "")
        {
          envoi = false;
          $("#req_telephone").addClass("alert alert-danger")
          $("#er_telephone").html("Ce champ est obligatoire")
          $("#er_telephone").addClass("text-danger mt-0 pt-0 mb-3");
        };
        if ($("#req_adresse").val() == "")
        {
          envoi = false;
          $("#req_adresse").addClass("alert alert-danger")
          $("#er_adresse").html("Ce champ est obligatoire")
          $("#er_adresse").addClass("text-danger mt-0 pt-0 mb-3");
        };          
        
        if (regEx.test(nom_prenom)==false) 
        {
          envoi = false;
          $("#req_nom_prenom").addClass("alert alert-danger")
          $("#req_nom_prenom+small").html("Le nom et le prenom ne doivent comporter que des lettres")
          $("#req_nom_prenom+small").addClass("text-danger mt-0 pt-0 mb-3");
        };
        if(envoi==true)
        {
        $("#commande").submit();
        };
    };
    
$("#envoyer").click(function (e) {
        e.preventDefault();
        verif();
});
});

