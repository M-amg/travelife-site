/*Animation filtre pour mobile*/
$(document).ready(function () {

    $(".open-call").on("click", function (e) {
        e.preventDefault();
        $(".content").removeClass("d-md-block d-none").addClass('d-md-none d-block');


        let title  = $('.title');
        title.text(title.text() == 'Filtres' ? 'Résultats' : 'Filtres');

        $("#wrap").animate({ width: "toggle" }, 700);

    });
});

/* Toggle menu mobil */
let lineContainer = document.querySelector(".line-container");
let navContainer = document.querySelector(".nav-container");

lineContainer.addEventListener("click", () => {
    lineContainer.classList.toggle("active");
    navContainer.classList.toggle("active")
});


/*$(".web .fas").click(function () {
    active=$(this).data('active');
    if(active){
        $(".web .nav").animate({
            left: '-2000px'
        }, 200);
        $(this).data('active',false)
    }else{
        $(".web .nav").animate({
            left: '0px'
        }, 300);
        $(this).data('active',true)
    }

});*/

// passenger





        $(document).on('click', '.clickedInput1', function () {
            travelId = $(this).data('id');
            console.log('dataaa', travelId);

            event.stopPropagation();
            $("#Flight-passenger"+travelId).toggleClass("d-none")

        })

        $(document).on('click', '.clicked1', function () {
            event.stopPropagation();
        })
        $(document).on('click', '.clicked2', function () {
            event.stopPropagation();
        })

        $(document).on('click', '.clickedInput2', function () {
            travelId = $(this).data('id');
            console.log('dataaa', travelId);

            event.stopPropagation();

            $("#Flight-passenger2"+travelId).toggleClass("d-none")

        })

        // $(window).click(function () {

        //     if (!$(".sw-passengers-input"+travelId).hasClass('.d-none'))
        //         $("#Flight-passenger"+travelId).addClass("d-none");

        //     if (!$("#Flight-passenger2"+travelId).hasClass('.d-none'))
        //         $("#Flight-passenger2"+travelId).addClass("d-none");

        // });



$("#Hotel-passenger").click(function(event){
    passenger();
    initEvent();
    event.stopPropagation();
});

$(".fl-passenger").click(function () {
    console.log("this");

    travelId = $(this).data('id');
    console.log('dataaa', travelId);

    adult=$("#adult"+travelId).val();
    infant=$("#infant"+travelId).val();
    baby=$("#baby"+travelId).val();
    txt="";
    if(adult>1){
        txt+=adult+" Adultes, ";
    }else {
        txt+=adult+" Adulte, ";
    }
    if(infant==1)
        txt+=infant+" Enfant, ";
    else if(infant>1)
        txt+=infant+" Enfants, ";

    if(baby==1)
        txt+=baby+" Bébés";
    else if(baby>1)
        txt+=baby+" Bébé";

    $("#Flight-passenger-input2"+travelId).find(".passengers-text").html(txt)
});

$(".rooms").change(function () {
    let travelId = $(this).data('id');
    let typeRoom = $('#room'+travelId).val();
    console.log('typeRoom', typeRoom);
    let txt = "";
    switch (typeRoom) {
        case '1':
            txt = "Individuelle";
            break;
        case '3':
            txt = "Triple";
            break;
        case '4':
            txt = "Quadruple";
            break;
        default:
            txt = "Double";
      }
    $("#adult"+travelId).val(typeRoom);
    $("#Flight-passenger-input"+travelId).find(".passengers-text").html(txt)
    passengerPackage(typeRoom, travelId);
});

function passengerPackage(typeRoom, travelId) {
    nb = typeRoom;
    txt = "";

    if (nb > 1) {
        txt += nb + " Adultes";
    } else {
        txt += nb + " Adulte";
    }

    $("#Flight-passenger-input2"+travelId).find(".passengers-text").html(txt);

}
/* END Passenger */

/* DatePecker */
jQuery('.date-as').daterangepicker({
    "singleDatePicker": true,
    "showDropdowns": true,
    "autoApply": true,
    "opens": "center",
    "minDate":new Date(),
    "locale": {
        "format": "DD/MM/YYYY",
        "customRangeLabel": "Custom",
        "weekLabel": "W",
        /*  "daysOfWeek": [
             "{{ __('generate.Su') }}",
             "{{ __('generate.Mo') }}",
             "{{ __('generate.Tu') }}",
             "{{ __('generate.We') }}",
             "{{ __('generate.Th') }}",
             "{{ __('generate.Fr') }}",
             "{{ __('generate.Sa') }}"
         ],
         "monthNames": [
             "{{ __('generate.January') }}",
             "{{ __('generate.February') }}",
             "{{ __('generate.March') }}",
             "{{ __('generate.April') }}",
             "{{ __('generate.May') }}",
             "{{ __('generate.June') }}",
             "{{ __('generate.July') }}",
             "{{ __('generate.August') }}",
             "{{ __('generate.September') }}",
             "{{ __('generate.October') }}",
             "{{ __('generate.November') }}",
             "{{ __('generate.December') }}"
         ],*/
        "firstDay": 1
    },
});

$(".date-ar").daterangepicker({
    "showDropdowns": true,
    "autoApply": true,
    "minDate":new Date(),
    "locale": {
        "format": "DD/MM/YYYY",
        "separator": " - ",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        "weekLabel": "W",
        /*  "daysOfWeek": [
              "{{ __('generate.Su') }}",
              "{{ __('generate.Mo') }}",
              "{{ __('generate.Tu') }}",
              "{{ __('generate.We') }}",
              "{{ __('generate.Th') }}",
              "{{ __('generate.Fr') }}",
              "{{ __('generate.Sa') }}"
          ],
          "monthNames": [
              "{{ __('generate.January') }}",
              "{{ __('generate.February') }}",
              "{{ __('generate.March') }}",
              "{{ __('generate.April') }}",
              "{{ __('generate.May') }}",
              "{{ __('generate.June') }}",
              "{{ __('generate.July') }}",
              "{{ __('generate.August') }}",
              "{{ __('generate.September') }}",
              "{{ __('generate.October') }}",
              "{{ __('generate.November') }}",
              "{{ __('generate.December') }}"
          ],*/
        "firstDay": 1
    },
    "showCustomRangeLabel": false,
    "opens": "center"
});

/* Date AR-AS*/
$("#type-vol").change(function () {
    $("#date-as-content").toggleClass("d-none");
    $("#date-ar-content").toggleClass("d-none");
});


/*edit search flight*/
$("#edit-search").click(function () {
    $("#search").toggleClass("d-none");
    $("#search-result").toggleClass("d-none");
});


//animation model
$(function(){
    $('[role=dialog]')
        .on('show.bs.modal', function(e) {
            $(this)
                .find('[role=document]')
                .removeClass()
                .addClass('modal-dialog ' + $(e.relatedTarget).data('ui-class'))
        })
});

/*add rooms*/
$(".hl-room").click(function () {
    nb = $("#room").val();
    room = ``;
    for ($i = 0; $i < nb; $i++) {
        if ($i > 0)
            room += `<hr>`;
        room += `
        <div class="row mb-1">
            <div class="col-6 pt-2">
                <span class="text-dark">Adulte(s) </span><br>
            </div>
            <div class="col-6">
                <div class="number-input">
                    <button class="fl-passenger"
                            type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                    <input class="quantity" min="1" name="room[${$i}][adults]" id="adult-${$i}" value="1" max="10"
                           type="number" required>
                    <button class="fl-passenger plus"
                            type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                    ></button>
                </div>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-6 pt-2">
                <span class="text-dark">Enfant(s)</span><br>
            </div>
            <div class="col-6">
                <div class="number-input">
                    <button class="infant-age" data-id="${$i}"
                            type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                    <input class="quantity" min="0" id="infant-${$i}" name="room[${$i}][children]" value="0" max="4"
                           type="number">
                    <button class="infant-age plus" data-id="${$i}"
                            type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                    ></button>
                </div>
            </div>
        </div>
        <div id="infant-age-${$i}">

        </div>
        `;
    }
    $("#room-list").html(room)
    passenger();
    initEvent();
});

$("#Hotel-passenger-input").click(function (event) {
    event.stopPropagation();
    $("#Hotel-passenger").toggleClass("d-none")
});
/*add infant*/
$(document).on('click', '.hl-passenger', function () {
    passenger();
});
initEvent();
function initEvent() {
    $('.infant-age').click( function () {
        id = $(this).data('id');
        nb = $("#infant-" + id).val();
        infant = ``;
        for ($i = 0; $i < nb; $i++) {
            infant += `
        <div class="row mb-1">
            <div class="col-6">
                <span class="text-dark">Age ${$i + 1}</span><br>
            </div>
            <div class="col-6">
                <div class="number-input">
                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                    <input class="quantity" min="1" name="room[${id}][childrenAges][${$i}]" id="age${$i}" value="1" max="17"
                           type="number" required>
                    <button class="plus" type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></button>
                </div>
            </div>
        </div>

        `;
        }
        $("#infant-age-" + id).html(infant);
        passenger();
    });

}

/*nb passenger*/
passenger();

function passenger() {
    nb = $("#room").val();
    nbAdult = 0;
    nbInfant = 0;
    for ($i = 0; $i < nb; $i++) {
        nbAdult += parseInt($("#adult-" + $i).val());
        nbInfant += parseInt($("#infant-" + $i).val());
    }
    txt = "";
    if (nb > 1) {
        txt += nb + " Chambres, ";
    } else {
        txt += nb + " Chambre, ";
    }
    if (nbAdult > 1) {
        txt += nbAdult + " Adultes";
    } else {
        txt += nbAdult + " Adulte";
    }
    if (nbInfant == 1)
        txt += ", " + nbInfant + " Enfant ";
    else if (nbInfant > 1)
        txt += ", " + nbInfant + " Enfants ";

    $("#Hotel-passenger-input .passengers-text").html(txt);

}
//account
$(".account").click(function () {
    $("#sign-in").toggleClass("d-none");
    $("#sign-up").toggleClass("d-none");
})


$(document).on('click', '.city-item', function () {
    data = $(this).data('val');
    id = $(this).data('id');
    name = $(this).data('name');
    $("#" + id).val(name);
    $("#" + id + "ID").val(data);
    $("#" + id + "_data").html("")
});
$(window).click(function () {
    $(".city-list").hide();

    // if (!$(".sw-passengers-input"+travelId).hasClass('.d-none'))
    //     $("#Flight-passenger"+travelId).addClass("d-none");

    // if (!$("#Flight-passenger2"+travelId).hasClass('.d-none'))
    //     $("#Flight-passenger2"+travelId).addClass("d-none");

    if (!$("#Flight-passenger").hasClass('.d-none'))
    $("#Flight-passenger").addClass("d-none");

    if (!$("#Hotel-passenger").hasClass('.d-none'))
        $("#Hotel-passenger").addClass("d-none");


    if (!$(".clicked1").hasClass('.d-none'))
        $(".clicked1").addClass("d-none");

    if (!$(".clicked2").hasClass('.d-none'))
        $(".clicked2").addClass("d-none");
});

$("#Flight-passenger-input").click(function (event) {
    event.stopPropagation();
    $("#Flight-passenger").toggleClass("d-none")
});
$("#Flight-passenger").click(function(event){
    event.stopPropagation();
});



