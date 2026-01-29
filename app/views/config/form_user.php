<form class="form-horizontal" id="form-user" action="<?= base_url() . "/config/create_user"; ?>" method="POST">
    <fieldset>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-md-3"><b>Username</b></label>
                    <div class="col-md-9">
                        <div class="input">
                            <input class="form-control" name="username" placeholder="Username" maxlength="20" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"><b>Fullname</b></label>
                    <div class="col-md-9">
                        <div class="input">
                            <input class="form-control" name="fullname" placeholder="Fullname" maxlength="20" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"><b>Phone</b></label>
                    <div class="col-md-9">
                        <div class="input">
                            <input class="form-control" name="phone" type="number" placeholder="Phone" maxlength="12" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"><b>Email</b></label>
                    <div class="col-md-9">
                        <div class="input">
                            <input class="form-control" name="email" placeholder="Email" maxlength="20" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"><b>NIP</b></label>
                    <div class="col-md-9">
                        <div class="input">
                            <input class="form-control" name="nip" type="number" placeholder="NIP" maxlength="10" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"><b>Password</b></label>
                    <div class="col-md-9">
                        <div class="input">
                            <input class="form-control" type="password" name="password" placeholder="Password" maxlength="20" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="form-actions">
        <div class="row">
            <div class="col-md-12" align="center">
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
                <button type="button" class="btn btn-default" id="close-user-form" data-dismiss="modal">
                    Batal
                </button>
            </div>
        </div>
    </div>
</form>

<script src="<?= $this->config->item('js_path'); ?>plugins/masked-input/jquery.maskedinput.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#input-tgl_kirim,#input-tgl_kembali").mask('99-99-9999');

        // START AND FINISH DATE
        $('#input-tgl_kirim,#input-tgl_kembali').datepicker({
            dateFormat: 'dd-mm-yy',
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>'
        });
    });

    var main_form_id = 'form-user';
    var $main_form = $('#' + main_form_id);
    var submit_noty = ('menambah');
    var main_form_stat = $main_form.validate({
        // Do not change code below
        errorPlacement: function(error, element) {
            error.addClass('error');
            error.insertAfter(element.parent());

        }
    });

    $main_form.submit(function(e) {
        e.preventDefault(); // Stop halaman refresh

        if (main_form_stat.checkForm()) {
            var $btn = $(this).find('button[type="submit"]');
            $btn.prop('disabled', true).text('Sedang menyimpan...');

            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status === 'success') {
                        // Alert bawaan browser
                        alert("Berhasil: " + data.message);

                        // Reset form & tutup modal
                        $main_form[0].reset();
                        $('#close-user-form').click();

                        // Reload table kalau ada
                        if (typeof table_user !== 'undefined') {
                            table_user.ajax.reload();
                        } else {
                            location.reload(); // Opsi terakhir: reload halaman
                        }
                    } else {
                        alert("Gagal: " + data.message);
                    }
                },
                error: function() {
                    alert("Terjadi kesalahan sistem saat menyimpan data.");
                },
                complete: function() {
                    $btn.prop('disabled', false).text('Simpan');
                }
            });
        }
        return false;
    });
</script>