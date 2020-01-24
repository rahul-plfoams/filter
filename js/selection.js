$(document).ready(function(){
    $('.sizeSingle').on('change', function(){        
        if($('.sizeSingle:checked').length){
          $('.noOfSleeper2').prop('disabled', true);
            $('.noOfSleeper2').prop('checked', false);
            $('.noOfSleeper3').prop('disabled', true);
            $('.noOfSleeper3').prop('checked', false);
            $('.noOfSleeper4').prop('disabled', true);
            $('.noOfSleeper4').prop('checked', false);
            return;
        }
        $('.noOfSleeper2').prop('disabled', false);
        $('.noOfSleeper3').prop('disabled', false);
        $('.noOfSleeper4').prop('disabled', false);
    });
    $('.sizeDouble').on('change', function(){        
        if($('.sizeDouble:checked').length){
            $('.noOfSleeper3').prop('disabled', true);
            $('.noOfSleeper3').prop('checked', false);
            $('.noOfSleeper4').prop('disabled', true);
            $('.noOfSleeper4').prop('checked', false);
            $('.noOfSleeper1').prop('disabled', false);
            $('.noOfSleeper2').prop('disabled', false);
            return;
        }
        $('.noOfSleeper3').prop('disabled', false);
        $('.noOfSleeper4').prop('disabled', false);
    });
    $('.sizeQueen').on('change', function(){        
        if($('.sizeQueen:checked').length){
            $('.noOfSleeper4').prop('disabled', true);
            $('.noOfSleeper4').prop('checked', false);
            $('.noOfSleeper1').prop('disabled', false);
            $('.noOfSleeper2').prop('disabled', false);
            $('.noOfSleeper3').prop('disabled', false);
            return;
        }
        $('.noOfSleeper4').prop('disabled', false);
    });
    $('.sizeKing').on('change', function(){        
        if($('.sizeKing:checked').length){
            $('.noOfSleeper1').prop('disabled', false);
            $('.noOfSleeper2').prop('disabled', false);
            $('.noOfSleeper3').prop('disabled', false);
            $('.noOfSleeper4').prop('disabled', false);
            return;
        }
    });
})