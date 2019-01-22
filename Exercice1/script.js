function frOnSubmit()
{   var valide = false;

    if (valideChampsObligatoires()===true)
    {
        if(valideFormat()===true)
        {
            valide = true;
            Saisir();
        }

        return valide;
    }

}
function onLoad()
{
    var a = document.getElementById("aide");
    var lien = document.location;
    lien = lien.href.split("?");
    a.href += "?" + lien[1];
}


function valideChampsObligatoires()
{
    var Valide = true, tabInscript = new Array("txtmail","txtmdp","txtbirthday","txtpseudo");


    for(i=0;i<tabInscript.length;i++)
    {
        if(valideExiste(tabInscript[i])!==false)
        {
            Valide=true;
        }
        else
            event.preventDefault();
    }


    return Valide;
}
function valideExiste(Case)
{
    var Validation=false;
    if(document.getElementById(Case).value==="")
    {
        Validation=false;
        document.getElementById(Case).style.borderColor="firebrick";
    }
    else
    {
        Validation=true;
        document.getElementById(Case).style.backgroundColor="white";
    }
    return Validation;
}

function valideFormat()
{
    var Validation = true ,tabInscript = new Array("txtmail","txtmdp","txtbirthday","txtpseudo");


    if (ValideNom(tabInscript[0]) === false)
    {
        Validation = false;
        document.getElementById(tabInscript[0]).style.borderColor="firebrick";
    }
    else if (ValideNom(tabInscript[0]) === true)
    {
        Validation = true;
        document.getElementById(tabInscript[0]).style.borderColor="white";
    }

    if (ValideNom(tabInscript[1]) === false)
    {
        Validation = false;
        document.getElementById(tabInscript[1]).style.borderColor="firebrick";
    }
    else if (ValideNom(tabInscript[1]) === true)
    {
        Validation = true;
        document.getElementById(tabInscript[1]).style.borderColor="white";
    }

    if (ValideNom(tabInscript[2]) === false)
    {
        Validation = false;
        document.getElementById(tabInscript[2]).style.borderColor="firebrick";
    }
    else if (ValideNom(tabInscript[2]) === true)
    {
        Validation = true;
        document.getElementById(tabInscript[2]).style.borderColor="white";
    }
    if (ValideTel(tabInscript[3]) === false)
    {
        Validation = false;
        document.getElementById(tabInscript[3]).style.borderColor="firebrick";
    }
    else if (ValideTel(tabInscript[3]) === true)
    {
        Validation = true;
        document.getElementById(tabInscript[3]).style.borderColor="white";
    }
}