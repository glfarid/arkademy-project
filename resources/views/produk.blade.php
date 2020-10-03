<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/slinky.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/autoNumeric.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-md-md-top">

    <!-- Multiple fixed navbars wrapper -->
    <div class="fixed-top">

        <!-- Main navbar -->
        <div class="navbar navbar-expand-md navbar-dark">
            <div class="navbar-brand wmin-0 mr-5">
                <a href="../full/index.html" class="d-inline-block">
                    <img src="../../../../global_assets/images/logo_light.png" alt="">
                </a>
            </div>

            <div class="d-md-none">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                    <i class="icon-tree5"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="navbar-nav-link">Text link</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separate action</a>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="navbar-nav-link">
                            Text link
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="navbar-nav-link">
                            <i class="icon-bell2"></i>
                            <span class="d-md-none ml-2">Notifications</span>
                            <span class="badge badge-mark border-white ml-auto ml-md-0"></span>
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-user">
                        <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle"
                            data-toggle="dropdown">
                            <img src="../../../../global_assets/images/image.png" class="rounded-circle mr-2"
                                height="34" alt="">
                            <span>Victoria</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                            <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                            <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span
                                    class="badge badge-pill bg-blue ml-auto">58</span></a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                            <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->


        <!-- Secondary navbar -->
        <div class="navbar navbar-expand-md navbar-light">
            <div class="text-center d-md-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                    data-target="#navbar-navigation">
                    <i class="icon-unfold mr-2"></i>
                    Navigation
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../full/index.html" class="navbar-nav-link">
                            <i class="icon-home4 mr-2"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item nav-item-levels mega-menu-full">
                        <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-make-group mr-2"></i>
                            Navigation
                        </a>

                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div
                                            class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">
                                            Column title</div>
                                        <div class="dropdown-divider mb-2"></div>
                                        <div class="dropdown-item-group mb-3 mb-md-0">
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="dropdown-item rounded">Top level link 1</a></li>
                                                <li>
                                                    <a href="#" class="dropdown-item rounded">With sub levels</a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#" class="dropdown-item rounded">Second level</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="dropdown-item rounded">With sub
                                                                levels</a>
                                                            <ul class="list-unstyled">
                                                                <li><a href="#" class="dropdown-item rounded">Third
                                                                        level</a></li>
                                                                <li><a href="#" class="dropdown-item rounded">Third
                                                                        level</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#" class="dropdown-item rounded">Second level</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="dropdown-item rounded">Top level link 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div
                                            class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">
                                            Column title</div>
                                        <div class="dropdown-divider mb-2"></div>
                                        <div class="dropdown-item-group mb-3 mb-md-0">
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="dropdown-item rounded">Top level link 1</a></li>
                                                <li>
                                                    <a href="#" class="dropdown-item dropdown-item-open rounded">With
                                                        sub levels</a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#" class="dropdown-item rounded">Second level</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="dropdown-item dropdown-item-open rounded">With
                                                                sub levels</a>
                                                            <ul class="list-unstyled active">
                                                                <li><a href="#"
                                                                        class="dropdown-item active rounded">Active
                                                                        link</a></li>
                                                                <li><a href="#" class="dropdown-item rounded">Third
                                                                        level</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#" class="dropdown-item rounded">Second level</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="dropdown-item rounded">Top level link 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div
                                            class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">
                                            Column title</div>
                                        <div class="dropdown-divider mb-2"></div>
                                        <div class="dropdown-item-group mb-3 mb-md-0">
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="dropdown-item rounded">Top level link 1</a></li>
                                                <li>
                                                    <a href="#" class="dropdown-item rounded">With sub levels</a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#" class="dropdown-item rounded">Second level</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="dropdown-item rounded">With sub
                                                                levels</a>
                                                            <ul class="list-unstyled">
                                                                <li><a href="#" class="dropdown-item rounded">Third
                                                                        level</a></li>
                                                                <li><a href="#" class="dropdown-item rounded">Third
                                                                        level</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#" class="dropdown-item rounded">Second level</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="dropdown-item rounded">Top level link 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div
                                            class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">
                                            Column title</div>
                                        <div class="dropdown-divider mb-2"></div>
                                        <div class="dropdown-item-group mb-3 mb-md-0">
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="dropdown-item rounded">Top level link 1</a></li>
                                                <li>
                                                    <a href="#" class="dropdown-item rounded">With sub levels</a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#" class="dropdown-item rounded">Second level</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="dropdown-item rounded">With sub
                                                                levels</a>
                                                            <ul class="list-unstyled">
                                                                <li><a href="#" class="dropdown-item rounded">Third
                                                                        level</a></li>
                                                                <li><a href="#" class="dropdown-item rounded">Third
                                                                        level</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#" class="dropdown-item rounded">Second level</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="dropdown-item rounded">Top level link 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="navbar-nav-link dropdown-toggle active" data-toggle="dropdown">
                            <i class="icon-strategy mr-2"></i>
                            Starter kit
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdown-header">Basic layouts</div>
                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item dropdown-toggle"><i class="icon-grid2"></i>
                                    Sidebars</a>
                                <div class="dropdown-menu">
                                    <a href="../seed/sidebar_none.html" class="dropdown-item">No sidebar</a>
                                    <a href="../seed/sidebar_main.html" class="dropdown-item">1 sidebar</a>
                                    <div class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">2 sidebars</a>
                                        <div class="dropdown-menu">
                                            <a href="../seed/sidebar_secondary.html" class="dropdown-item">Secondary
                                                sidebar</a>
                                            <a href="../seed/sidebar_right.html" class="dropdown-item">Right sidebar</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-submenu">
                                        <a href="#" class="dropdown-item dropdown-toggle">3 sidebars</a>
                                        <div class="dropdown-menu">
                                            <a href="../seed/sidebar_right_hidden.html" class="dropdown-item">Right
                                                sidebar hidden</a>
                                            <a href="../seed/sidebar_right_visible.html" class="dropdown-item">Right
                                                sidebar visible</a>
                                        </div>
                                    </div>
                                    <a href="../seed/sidebar_sections.html" class="dropdown-item">Sectioned sidebar</a>
                                    <a href="../seed/sidebar_stretched.html" class="dropdown-item">Stretched sidebar</a>
                                </div>
                            </div>
                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item dropdown-item-open dropdown-toggle"><i
                                        class="icon-paragraph-justify3"></i> Navbars</a>
                                <div class="dropdown-menu">
                                    <a href="../seed/navbar_main_fixed.html" class="dropdown-item">Main navbar fixed</a>
                                    <a href="../seed/navbar_main_hideable.html" class="dropdown-item">Main navbar
                                        hideable</a>
                                    <a href="../seed/navbar_secondary_sticky.html" class="dropdown-item">Secondary
                                        navbar sticky</a>
                                    <a href="../seed/navbar_both_fixed.html" class="dropdown-item active">Both navbars
                                        fixed</a>
                                </div>
                            </div>
                            <div class="dropdown-header">Optional layouts</div>
                            <a href="../seed/layout_boxed.html" class="dropdown-item"><i
                                    class="icon-align-center-horizontal"></i> Boxed layout</a>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item">
                        <a href="#" class="navbar-nav-link">Text link</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-cog3"></i>
                            <span class="d-md-none ml-2">Dropdown</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /secondary navbar -->

    </div>
    <!-- /multiple fixed navbars wrapper -->


    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Starters</span> - Navbars
                    Fixed</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none py-0 mb-3 mb-md-0">
                <div class="breadcrumb">
                    <a href="../full/index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="#" class="breadcrumb-item">Link</a>
                    <span class="breadcrumb-item active">Current</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Page content -->
    <div class="page-content pt-0">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Basic datatable -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Basic datatable</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <button type="button"
                                    class="btn bg-indigo btn-labeled btn-labeled-left rounded-round mr-3"
                                    data-toggle="modal" data-target="#modal_form_horizontal"><b><i
                                            class="icon-add"></i></b>
                                    Tambah</button>
                                {{-- <a class="list-icons-item" data-action="remove"></a> --}}
                            </div>
                        </div>
                    </div>

                    {{-- <div class="card-body">
                        The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive
                        enhancement, and will add advanced interaction controls to any HTML table. DataTables has most
                        features enabled by default, so all you need to do to use it with your own tables is to call the
                        construction function. Searching, ordering, paging etc goodness will be immediately added to the
                        table, as shown in this example. <strong>Datatables support all available table
                            styling.</strong>
                    </div> --}}

                    <table class="table datatable-basic">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama produk</th>
                                <th>Keterangan</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td class="rupiah" data-a-sign="Rp " data-a-dec="," data-a-sep=".">{{ $item->harga }}
                                </td>
                                <td>{{ $item->jumlah }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#modal_form_horizontal_update{{ $item->id }}"
                                                    class="dropdown-item"><i class="icon-pencil6"></i> Ubah</a>
                                                {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="icon-switch2"></i>
                                                {{ __('Logout') }}
                                                </a> --}}
                                                <a href="{{ route('produk.destroy', $item->id) }}" class="dropdown-item"
                                                    onclick="event.preventDefault();
                                                document.getElementById('destroy{{ $item->id }}').submit();"><i
                                                        class="icon-trash-alt"></i>
                                                    Hapus</a>
                                                <form id="destroy{{ $item->id }}"
                                                    action="{{ route('produk.destroy', $item->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /basic datatable -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    <!-- Footer -->
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                data-target="#navbar-footer">
                <i class="icon-unfold mr-2"></i>
                Footer
            </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-footer">
            <span class="navbar-text">
                &copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a
                    href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </span>

            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">Text link</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-lifebuoy"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                        class="navbar-nav-link font-weight-semibold">
                        <span class="text-pink-400">
                            <i class="icon-cart2 mr-2"></i>
                            Purchase
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /footer -->

    <script type="text/javascript">
        $(document).ready(function(){
            $('.rupiah').autoNumeric('init');
        });
    </script>

    <!-- Horizontal form modal UNTUK TAMBAH -->
    <div id="modal_form_horizontal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Produk</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form action="{{ route('produk.store') }}" method="POST" class="form-horizontal"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_produk" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="number" name="jumlah" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-indigo">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /horizontal form modal UNTUK TAMBAH -->

    <!-- Horizontal form modal UNTUK UPDATE -->
    @foreach ($produk as $item)
    <div id="modal_form_horizontal_update{{ $item->id }}" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Pemesanan</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form action="{{ route('produk.update', $item->id) }}" method="POST" class="form-horizontal">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_produk" class="form-control"
                                    value="{{ $item->nama_produk }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control"
                                    value="{{ $item->keterangan }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" value="{{ $item->harga }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="number" name="jumlah" class="form-control" value="{{ $item->jumlah }}">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-primary">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <!-- /horizontal form modal UNTUK UPDATE -->

</body>

</html>