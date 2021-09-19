<?= view('admin/fragments/head') ?>
<?= view('admin/fragments/header') ?>
<?= view('admin/fragments/navigation') ?>
<div class="app-content content container-fluid">
  <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Prescription</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Prescription</a>
                </li>
                <!-- <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                </li> -->
              </ol>
            </div>
          </div>
        </div>

        <!-- content -->
        <div class="content-body"><!-- stats -->
            <!-- Contextual classes start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Prescription</h4>
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

                                <p>You can edit prescriptions</p>
                                <!-- flash messages -->
                                <?= view('flashmessages') ?>
                                <!-- flash messages end -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped dataTable">
                                        <colgroup>
                                            <col class="col-xs-1">
                                            <col class="col-xs-7">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <td>Malaria Type</td>
                                                <td>Prescription</td>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0; foreach($prescription as $row): $i++; ?>
                                            <tr>
                                                <th scope="row">
                                                    <?= $i ?>
                                                </th>
                                                <td><?= $row->malaria_type ?></td>
                                                <td><?= $row->prescription ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-backdrop="false" data-target="#editPrescription<?= $row->prescription_id ?>" id="fund" style="margin-bottom: 3px;">Edit</button>
                                                </td>                                             
                                            </tr>
                                            <!-- edit -->
                                            <div class="modal fade text-xs-left" id="editPrescription<?= $row->prescription_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel4">Edit Type</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="form" method="post" action="<?= base_url('admin/edit_prescription') ?>">
                                                                <div class="form-body">
                                                                    <h4 class="form-section"><i class="icon-plus"></i><?= $row->malaria_type ?></h4>
                                                                    <div class="row">
                                                                        <input type="hidden" value="<?= $row->prescription_id ?>" name="prescription_id">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="userinput1">Prescription</label>
                                                                                <textarea name="prescription" id="" class="form-control border-primary" cols="30" rows="10"><?= $row->prescription ?></textarea>
                                                                            </div>
                                                                        </div>

                                                                        
                                                        
                                                                    </div>
                                                                    

                                                                </div>
                                                                <!-- <div class="form-actions right">
                                                                    <button type="button" class="btn btn-warning mr-1">
                                                                        <i class="icon-cross2"></i> Cancel
                                                                    </button>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        <i class="icon-check2"></i> Save
                                                                    </button>
                                                                </div> -->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach ?>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contextual classes end -->
        </div>
      </div>
    </div>


    <div class="modal fade text-xs-left" id="fundUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel4">Add Symptoms</h4>
                </div>
                <div class="modal-body">
                <form class="form" method="post" action="<?= base_url('admin/symptoms') ?>">
                        <div class="form-body">
                            <h4 class="form-section"><i class="icon-plus"></i> Add Symptoms</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userinput1">Symptoms</label>
                                        <input type="text" id="userinput1" class="form-control border-primary" value="" placeholder="Symptoms" name="symptoms" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userinput1">Malaria Type</label>
                                        <select class="form-control border-primary" name="malaria_type" required>
                                            <option selected disabled>Select malaria type</option>
                                            <option value="Plasmodium Malaria">Plasmodium Malaria</option>
                                            <option value="Plasmodium Ovale">Plasmodium Ovale</option>
                                            <option value="Plasmodium Vivax">Plasmodium Vivax</option>
                                            <option value="Plasmodium Falciparum">Plasmodium Falciparum</option>
                                        </select>
                                    </div>
                                </div>
                  
                            </div>
                            

                        </div>
                        <!-- <div class="form-actions right">
                            <button type="button" class="btn btn-warning mr-1">
                                <i class="icon-cross2"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="icon-check2"></i> Save
                            </button>
                        </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary">Add</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


 <!-- ////////////////////////////////////////////////////////////////////////////-->

 <?= view('admin/fragments/footer') ?>