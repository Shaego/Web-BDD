


function frOnSubmit()
{   var valide = false;

    if (valideChampsObligatoires()===true)
    {
        if(valideFormat()===true)
        {
            valide = true;
            onLoad();
        }

        return valide;
    }

}
function onLoad()
{
    var a = document.getElementById("aide");
    var b = document.getElementById("connexion");
    var c = document.getElementById("index");
    var lien = document.location;
    lien = lien.href.split("?");
    if (lien.indexOf("?"))
    {
        var infos = lien[1].split("&");
    }

    var user = new Object()

        user.mail = infos[0].split("=")[1],
        user.mdp = infos[1].split("=")[1],
        user.birthday = infos[3].split("=")[1],
        user.pseudo = document.getElementById("txtpseudo");

    user.mail = user.mail.replace("%40","@");
   a.href += "?" + lien[1];
    b.href += "?" + lien[1];
    c.href += "?" + lien[1];


    for(var i = 0; i < infos.length; i++)
    {
        var temp = infos[i].split("=");
        user[temp[0]] = temp[1].split("%40")[0];
    }


    if (lien.indexOf("?")) {
        document.getElementById("connexion").innerHTML = "Modifier les informations";
        document.getElementById("bonjour").innerHTML = "Bonjour " + user.mail;

        document.getElementById("txtmail").value = user.mail; //Pourquoi ça ne marche pas ?
        document.getElementById("txtmdp").value = user.mdp;
        document.getElementById("txtbirthday").value = user.birthday;
        document.getElementById("txtpseudo").value = user.pseudo;
    }
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