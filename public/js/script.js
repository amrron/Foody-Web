$(document).ready(function() {
    var burger = $(".burger");
    var link = $(".link");
    var overlay = $(".overlay")
    var tinggi = $("#tinggi")
    var berat = $("#berat")
    var hitung = $("#hitung")
    var modalBody = $("#modal-body")


    burger.click(function () {
        link.toggleClass("burger-visible");
        burger.toggleClass("burger-close");
        overlay.toggle();
        
        return false;
    });

    $(document).click(function (e) {
        if (!link.is(e.target) && !link.has(e.target).length && !burger.is(e.target) && link.hasClass("burger-visible")) {
            link.removeClass("burger-visible");
            burger.removeClass("burger-close");
            overlay.hide();
        }
    });

    hitung.click(function(){
        // alert("Nilai BMI anda adalah: " + (berat.val() / Math.pow((tinggi.val()/100), 2)))
        modalBody.html("Nilai BMI anda adalah: <strong>" + (berat.val() / Math.pow((tinggi.val()/100), 2)).toFixed(2) + "</strong>") 
    });


    $("#modal-pagi .pilih-makanan").select2({
        placeholder: "Pilih makanan",
        width: "100%",
        dropdownParent: $('#modal-pagi') 
    });

    $("#modal-siang .pilih-makanan").select2({
        placeholder: "Pilih makanan",
        width: "100%",
        dropdownParent: $('#modal-siang') 
    });

    $("#modal-sore .pilih-makanan").select2({
        placeholder: "Pilih makanan",
        width: "100%",
        dropdownParent: $('#modal-sore') 
    });

    $("#modal-malam .pilih-makanan").select2({
        placeholder: "Pilih makanan",
        width: "100%",
        dropdownParent: $('#modal-malam') 
    });

    // $(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
    //     $(".alert-success").slideUp(500).remove();
    // });

    $("#alert-success").fadeTo(2000, 500).animate({left : '100%'}, 400).hide();
})