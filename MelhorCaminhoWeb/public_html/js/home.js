$(document).ready(function () {

    hideForm();
    carregaMenu();

    $("#menu li").click(function () {
        console.log("oi")
        showForm($(this).attr("id").substring(5));

    });



});

var menuList = [
    {
        ID: "dijresolve",
        Nome: "DijRsolve"
    },
    {
        ID: "caminho",
        Nome: "Caminho"
    },
    {
        ID: "usuario",
        Nome: "Usuário"
    },
    {
        ID: "cidade",
        Nome: "Cidade"
    },
    {
        ID: "uf",
        Nome: "UF"
    }
]


function carregaMenu() {
    for (var i = 0; i < menuList.length; i++) {

        $("#menu ul").append("<li id=menu-" + menuList[i].ID + ">" + menuList[i].Nome + "</li>");
    }
}

function hideForm() {
    for (var i = 0; i < menuList.length; i++) {
        $("#form-" + menuList[i].ID).hide();
    }
}

function showForm(id) {

    $("#menu-" + id).addClass("menuClicked");

    for (var i = 0; i < menuList.length; i++) {

        if (!$("#menu-" + menuList[i].ID).hasClass("menuClicked")) {
            $("#form-" + menuList[i].ID).hide();
        } else {
            $("#form-" + menuList[i].ID).fadeIn(200);
        }
    }
    $("#menu-" + id).removeClass("menuClicked");

}
