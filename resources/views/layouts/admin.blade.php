<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-center">
                        <div class="logo">
                            <a href="{{ route('admin.home') }}"><img
                                    src="{{ asset('assets/images/logo/logoumri.png') }}" alt="Logo"
                                    style="width: 100px;height:100px;" srcset=""></a>

                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="{{ route('admin.home') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Akun</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Profile</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Ganti Password</a>
                                </li>
                                <li class="submenu-item ">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a href="javascript:{}"
                                            onclick="document.getElementById('logout-form').submit();"
                                            href="component-badge.html">Logout</a>
                                    </form>
                                </li>
                        </li>

                    </ul>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Akun Mahasiswa</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('admin.user.index') }}">Lihat Data</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('admin.user.import') }}">Import Data</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-breadcrumb.html">Tambah Data</a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-folder"></i>
                            <span>Data PKM</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="component-alert.html">Lihat Data</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-badge.html">PKM yang Diterima</a>
                            </li>
                        </ul>
                    </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        @yield('content')
    </div>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <!-- filepond validation -->
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

    <!-- image editor -->
    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

    <!-- toastify -->
    <script src="assets/vendors/toastify/toastify.js"></script>

    <!-- filepond -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        // register desired plugins...
        FilePond.registerPlugin(
            // validates the size of the file...
            FilePondPluginFileValidateSize,
            // validates the file type...
            FilePondPluginFileValidateType,

            // calculates & dds cropping info based on the input image dimensions and the set crop ratio...
            FilePondPluginImageCrop,
            // preview the image file type...
            FilePondPluginImagePreview,
            // filter the image file
            FilePondPluginImageFilter,
            // corrects mobile image orientation...
            FilePondPluginImageExifOrientation,
            // calculates & adds resize information...
            FilePondPluginImageResize,
        );

        // Filepond: Basic
        FilePond.create(document.querySelector('.basic-filepond'), {
            allowImagePreview: false,
            allowMultiple: false,
            allowFileEncode: false,
            required: false
        });

        // Filepond: Multiple Files
        FilePond.create(document.querySelector('.multiple-files-filepond'), {
            allowImagePreview: false,
            allowMultiple: true,
            allowFileEncode: false,
            required: false
        });

        // Filepond: With Validation
        FilePond.create(document.querySelector('.with-validation-filepond'), {
            allowImagePreview: false,
            allowMultiple: true,
            allowFileEncode: false,
            required: true,
            acceptedFileTypes: ['image/png'],
            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                // Do custom type detection here and return with promise
                resolve(type);
            })
        });

        // Filepond: ImgBB with server property
        FilePond.create(document.querySelector('.imgbb-filepond'), {
            allowImagePreview: false,
            server: {
                process: (fieldName, file, metadata, load, error, progress, abort) => {
                    // We ignore the metadata property and only send the file

                    const formData = new FormData();
                    formData.append(fieldName, file, file.name);

                    const request = new XMLHttpRequest();
                    // you can change it by your client api key
                    request.open('POST', 'https://api.imgbb.com/1/upload?key=762894e2014f83c023b233b2f10395e2');

                    request.upload.onprogress = (e) => {
                        progress(e.lengthComputable, e.loaded, e.total);
                    };

                    request.onload = function() {
                        if (request.status >= 200 && request.status < 300) {
                            load(request.responseText);
                        } else {
                            error('oh no');
                        }
                    };

                    request.onreadystatechange = function() {
                        if (this.readyState == 4) {
                            if (this.status == 200) {
                                let response = JSON.parse(this.responseText);

                                Toastify({
                                    text: "Success uploading to imgbb! see console f12",
                                    duration: 3000,
                                    close: true,
                                    gravity: "bottom",
                                    position: "right",
                                    backgroundColor: "#4fbe87",
                                }).showToast();

                                console.log(response);
                            } else {
                                Toastify({
                                    text: "Failed uploading to imgbb! see console f12",
                                    duration: 3000,
                                    close: true,
                                    gravity: "bottom",
                                    position: "right",
                                    backgroundColor: "#ff0000",
                                }).showToast();

                                console.log("Error", this.statusText);
                            }
                        }
                    };

                    request.send(formData);
                }
            }
        });

        // Filepond: Image Preview
        FilePond.create(document.querySelector('.image-preview-filepond'), {
            allowImagePreview: true,
            allowImageFilter: false,
            allowImageExifOrientation: false,
            allowImageCrop: false,
            acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                // Do custom type detection here and return with promise
                resolve(type);
            })
        });

        // Filepond: Image Crop
        FilePond.create(document.querySelector('.image-crop-filepond'), {
            allowImagePreview: true,
            allowImageFilter: false,
            allowImageExifOrientation: false,
            allowImageCrop: true,
            acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                // Do custom type detection here and return with promise
                resolve(type);
            })
        });

        // Filepond: Image Exif Orientation
        FilePond.create(document.querySelector('.image-exif-filepond'), {
            allowImagePreview: true,
            allowImageFilter: false,
            allowImageExifOrientation: true,
            allowImageCrop: false,
            acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                // Do custom type detection here and return with promise
                resolve(type);
            })
        });

        // Filepond: Image Filter
        FilePond.create(document.querySelector('.image-filter-filepond'), {
            allowImagePreview: true,
            allowImageFilter: true,
            allowImageExifOrientation: false,
            allowImageCrop: false,
            imageFilterColorMatrix: [
                0.299, 0.587, 0.114, 0, 0,
                0.299, 0.587, 0.114, 0, 0,
                0.299, 0.587, 0.114, 0, 0,
                0.000, 0.000, 0.000, 1, 0
            ],
            acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                // Do custom type detection here and return with promise
                resolve(type);
            })
        });

        // Filepond: Image Resize
        FilePond.create(document.querySelector('.image-resize-filepond'), {
            allowImagePreview: true,
            allowImageFilter: false,
            allowImageExifOrientation: false,
            allowImageCrop: false,
            allowImageResize: true,
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            imageResizeMode: 'cover',
            imageResizeUpscale: true,
            acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                // Do custom type detection here and return with promise
                resolve(type);
            })
        });
    </script>

</body>

</html>
