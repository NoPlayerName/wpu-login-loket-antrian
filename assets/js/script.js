
$(function () {


    $('.addSubmenu').on('click', function () {
        $('#titleModalLabel').html('Add New Sub Menu');
        $('.modal-footer button[type=submit]').html('Add');
        $('modal-content form').attr('action', 'http://localhost/wpu-login /menu/submenu');
        $('#title').val("");
        $('#url').val("");
        $('#icon').val("");
        $('#menu_id #option1').text("Select Menu").attr('value', "");
        $('.modal-body #is_active').attr('checked', true);

    });

    $('.modalEdit').on('click', function () {
        $('#titleModalLabel').html('Edit Submenu');
        $('.modal-footer button[type=submit]').html('Save');
        //belum beres
        $('.modal-content form').attr('action', 'http://localhost/wpu-login-loket-antrian/menu/editsubmenu');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/wpu-login-loket-antrian/menu/getsubmenubyid/',
            data: { id: id },
            method: 'POST',
            dataType: 'json',
            success: function (data) {

                // console.log(data);

                $('#title').val(data.title);
                $('#url').val(data.url);
                $('#icon').val(data.icon);
                $('#id').val(data.id);
                $('#menu_id #option1').text(data.menu).attr('value', data.menu_id);


                if (data.is_active != 1) {
                    // console.log("betul");
                    $('.modal-body #is_active').attr('checked', false);
                } else {
                    // console.log("salah");
                    $('.modal-body #is_active').attr('checked', true);
                }

            }

        });

    });



});

