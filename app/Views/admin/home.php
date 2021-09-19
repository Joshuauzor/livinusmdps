<?= view('admin/fragments/head') ?>
<?= view('admin/fragments/header') ?> 
<?= view('admin/fragments/navigation') ?>
   

<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- stats -->

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body text-xs-left">
                                    <h3 class="pink"> 1</h3>
                                    <span>Doctors</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-ios-people pink font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body text-xs-left">
                                    <h3 class="teal">0</h3>
                                    <span>Pending Diagnosis</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-ios-help-outline teal font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body text-xs-left">
                                    <h3 class="deep-orange"><?= count($positive) ?></h3>
                                    <span>Positive Diagnosis</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class=" icon-checkmark-circled deep-orange font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body text-xs-left">
                                    <h3 class="cyan"><?= count($negative) ?></h3>
                                    <span>Negative Diagnosis</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-cross2 cyan font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ stats -->

   

        <!--/ project charts -->
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Diagnosis</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block card-dashboard">
                            <p>Here are the recent diagnosis.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped dataTable">
                                    <colgroup>
                                        <col class="col-xs-1">
                                        <col class="col-xs-7">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Malaria type</th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; foreach($recentDiagnosis as $row): $i++ ?>
                                        <tr>
                                            <th scope="row"> <?= $i ?>
                                            </th>
                                            <td><?= $row->name ?></td>
                                            <td> <?= $row->email ?></td>
                                            <td> <?= $row->phone ?> </td>
                                            <td><?= $row->malaria_type ?></td>
                                            <td><?= $row->result ?></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ project charts -->

        </div>
      </div>
    </div>

    <style>
        @media only screen and (max-width: 440px){
            #decline{
                margin-top: 3px;
            }
        }
    </style>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
          
            
            function approveAcct(userId){
                // var userId = $(this).attr('data-userId');
                var url = '<?= base_url('admin/approveUser') ?>'
                // console.log(userId);        
                Swal.fire({
                    title: 'Are you sure?',
                    text: "User account verification will be verified!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, verify it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                        type: 'POST',
                        url: url,
                        data: {userId},
                        success: function(data) {
                            Swal.fire(
                            'Deleted!',
                            'User account verification has been verified.',
                            'success'
                            );
                            location.reload();
                        },
                        
                        dataType: 'html'
                    });
                        
                    }
                })
            }

            // decline account
            function declineAcct(userId){
                // var userId = $(this).attr('data-userId');
                var url = '<?= base_url('admin/declineUser') ?>'
                // console.log(userId);        
                Swal.fire({
                    title: 'Are you sure?',
                    text: "User verification will be declined!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, decline it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                        type: 'POST',
                        url: url,
                        data: {userId},
                        success: function(data) {
                            Swal.fire(
                            'Deleted!',
                            'User account verification has been declined.',
                            'success'
                            );
                            location.reload();
                        },
                        
                        dataType: 'html'
                    });
                        // Swal.fire(
                        // 'Deleted!',
                        // 'User has been deleted.',
                        // 'success'
                        // )
                    }
                })
            }
    </script>
   
<?= view('admin/fragments/footer') ?>