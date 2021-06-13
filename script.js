function wyborKarnet(karnetNum){
    if(karnetNum == 1){
        document.getElementById("typKarnet").value = "Karent 24H"
        document.getElementById("kosztKarnet").value = "29.99zl"
    }
    if(karnetNum == 2){
        document.getElementById("typKarnet").value = "Karent 7 Dni"
        document.getElementById("kosztKarnet").value = "149.99zl"
    }
    if(karnetNum == 3){
        document.getElementById("typKarnet").value = "Karent 1 Miesiac"
        document.getElementById("kosztKarnet").value = "300.99zl"
    }
    if(karnetNum == 4){
        document.getElementById("typKarnet").value = "Karent Kwartalny"
        document.getElementById("kosztKarnet").value = "549.99zl"
    }
    if(karnetNum == 5){
        document.getElementById("typKarnet").value = "Karent Roczny"
        document.getElementById("kosztKarnet").value = "999.99zl"
    }
}