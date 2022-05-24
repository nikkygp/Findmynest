$(document).ready(function() {
    var email = $('#email').val();
    var pass = $('#pass').val();
    var phone = $('#phone').val();
    var name = $('#fname').val();
    var npass = $('#npass').val();
    if((email == "")||(pass == "")||(phone == "")||(name == "")||(npass == ""))
    {
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    }
    else
    {
        $('#lbtn').prop('disabled', false);
         $('#lbtn').css('background-color','#006aff');
    }
});

$('#email').on('keyup', function() {
    var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
    if(!re) {
        $('#error').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');

    } else {
        $('#error').hide();
        $('#lbtn').prop('disabled', false);
         $('#lbtn').css('background-color','#006aff');
    }
})
$('#pass').on('keyup', function() {
    var re = $('#pass').val();
    if((re.length) < 6) {
        $('#error1').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#error1').hide();
        $('#lbtn').prop('disabled', false);
         $('#lbtn').css('background-color','#006aff');
    }
})
$('#npass').on('keyup', function() {
    var pass = $('#pass').val();
    var npass = $('#npass').val();
    if(pass != npass) {
        $('#errorc').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#errorc').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');
    }
})
$('#fname').on('keypress', function() {
    var re = /^[a-zA-Z\s]+$/.test(this.value);
    if(!re) {
        $('#name').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#name').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');

    }
})
$('#place').on('keypress', function() {
    var re = /^[a-zA-Z\s]+$/.test(this.value);
    if(!re) {
        $('#loc').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#loc').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');
    }
})
$('#des').on('keypress', function() {
    var re = /^[a-zA-Z\s]+$/.test(this.value);
    if(!re) {
        $('#name1').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#name1').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');
    }
})
$('#price').on('keypress', function() {
    var re = /^\d*$/.test(this.value);
    if(!re) {
        $('#eprice').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#eprice').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');
    }
})
$('#exp').on('keypress', function() {
    var re = /^\d*$/.test(this.value);
    if(!re) {
        $('#exp1').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#exp1').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');
    }
})
$('#cvv').on('keypress', function() {
    var re = /^\d*$/.test(this.value);
    if(!re) {
        $('#cvv1').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#cvv1').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');
    }
})
$('#area').on('keypress', function() {
    var re = /^\d*$/.test(this.value);
    if(!re) {
        $('#earea').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#earea').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');
    }
})
$('#phone').on('keyup', function() {
    var re = /^\d{10}$/.test(this.value);
    if(!re) {
        $('#ephone').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#ephone').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');
    }
})
$('#card').on('keyup', function() {
    var re = /^\d{16}$/.test(this.value);
    if(!re) {
        $('#carde').show();
        $('#lbtn').prop('disabled', true);
         $('#lbtn').css('background-color','#8dbcff');
    } else {
        $('#carde').hide();
        $('#lbtn').prop('disabled', false);
        $('#lbtn').css('background-color','#006aff');
    }
})

