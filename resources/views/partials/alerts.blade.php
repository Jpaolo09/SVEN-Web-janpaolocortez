@if ($errors->any())
    <div id="formErrorAlert"
         class="alert alert-danger alert-dismissible fade show fixed-top mx-2 mx-sm-auto mt-3 text-center shadow"
         style="max-width: 600px; z-index: 1055;"
         role="alert">
        <strong>Oops!</strong> Please fix the errors in the form.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('success'))
    <div id="formSuccessAlert"
         class="alert alert-success alert-dismissible fade show fixed-top mx-2 mx-sm-auto mt-3 text-center shadow"
         style="max-width: 600px; z-index: 1055; top: 80px;"
         role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const errorAlert = document.getElementById('formErrorAlert');
        const successAlert = document.getElementById('formSuccessAlert');

        if (errorAlert) {
            setTimeout(() => {
                errorAlert.classList.remove('show');
                errorAlert.classList.add('hide');
                setTimeout(() => errorAlert.remove(), 500);
            }, 5000);
        }

        if (successAlert) {
            setTimeout(() => {
                successAlert.classList.remove('show');
                successAlert.classList.add('hide');
                setTimeout(() => successAlert.remove(), 500);
            }, 5000);
        }
    });
</script>