$(document).ready(function(){
    chargerCategories();
});

function chargerCategories(){
    $.get("categories.php",function (rep){
        $("#divCat").html(rep);
        $("#cats").change(function(){
            chargerProduits($(this).val());
            chargerPersons($(this).val());
        });
    });
}

function chargerProduits(idC){
    $.get("produits.php?idCat="+idC,function (rep){
        $("#divProduit").html(rep);
        $("#cats").change(function(){
            chargerProduits($(this).val());
        })
    });
}

function chargerPersons(idC){
    $.get("person.php?idCat="+idC,function (rep){
        $("#divPerson").html(rep);
        $("#cats").change(function(){
            chargerPersons($(this).val());
        })
    });
}