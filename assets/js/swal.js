function submitAnswer() {
    const submit = swal.mixin({
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false,
    })

    submit({
      title: 'Anda sudah yakin?',
      text: "Anda tidak bisa kembali mengulang ujian setelah jawaban terkirim!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, Kirim Jawaban!',
      cancelButtonText: 'Tidak, Batal!',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        $("#form-ujian").submit();
        localStorage.clear();
        submit(
          'Terkirim!',
          'Jawaban Anda sudah terkirim dan disimpan.',
          'success'
        )
      } else if (
        // Read more about handling dismissals
        result.dismiss === swal.DismissReason.cancel
      ) {
        submit(
          'Dibatalkan',
          'Silahkan lanjutkan mengerjakan',
          'error'
        )
      }
    })
  }