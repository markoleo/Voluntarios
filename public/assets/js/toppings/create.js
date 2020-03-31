$("input").change(function (){


        var num1=parseInt($('#cob_mean').val());
        var num2=parseInt($('#cob_woman').val());

        if(isNaN(num1)){

            num1=0;
        }

        if(isNaN(num2)){

            num2=0;
        }

        $('#total_people').val(num1+num2);


});
