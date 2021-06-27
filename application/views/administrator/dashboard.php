<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </div>

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat Datang!</h4>
        <p>
            Selamat Datang <strong><?php echo $username; ?></strong> di Knowledge Management System | Dinas Kominfo Kota Tangerang,
            Anda Login sebagai <strong><?php echo $level; ?></strong>
        </p>
        <hr>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-cogs"></i> Control Panel
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> &nbsp; Control Panel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info"></p>
                                <p>Jurusan</p>
                            </a>
                            <i class="fas fa-3x fa-user-graduate"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info"></p>
                                <p>Wiki</p>
                            </a>
                            <i class="fab fa-3x fa-wikipedia-w"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info"></p>
                                <p>Forum</p>
                            </a>
                            <i class="fas fa-3x fa-users"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info"></p>
                                <p>Document</p>
                            </a>
                            <i class="fas fa-3x fa-folder-open"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info"></p>
                                <p>Note Of Meeting</p>
                            </a>
                            <i class="fas fa-3x fa-file-signature"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info"></p>
                                <p>Lesson Learned</p>
                            </a>
                            <i class="fas fa-3x fa-chalkboard-teacher"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info"></p>
                                <p>Event</p>
                            </a>
                            <i class="fas fa-3x fa-calendar-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>