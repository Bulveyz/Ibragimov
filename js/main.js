$(document).ready(function () {
function update() {
    $.ajax({
        url: "/update.php",
        method: "GET",
        dataType: "HTML",
        data:{},
        success: function (data) {
            $('#res').empty();
            $('#total').empty();
            $('#res').append(data);

            var $total = $('.prico');
            var sum = 0;
            $total.each(function () {
                sum += parseInt($(this).text());
            });

            $('#total').append('$' + sum + '.00');
            // console.log($total);
        }
    });
}

update();

   $('.products').on('click','.buy' ,function () {
       var $idItem = $(this).data("id");
       $.ajax({
           url: '/add.php',
           method: "POST",
           data: {
               id:$idItem
           },
           success: function () {
               update();
               alert('Товар добавлен');
           }
       });
    });

    $('.cart-menu').on('click','i', function () {
        var $idItem = $(this).data("id");
        $.ajax({
            url: '/delete.php',
            method: "POST",
            data: {
                id:$idItem
            },
            success: function () {
                update();
            }
        });
    });


});
