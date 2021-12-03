
<?php $__env->startSection('content'); ?>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Laundry</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                                
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>Atas Nama</td>
                                        <td>Tanggal Masuk</td>
                                        <td>Paket Laundry</td>
                                        <td>Batas Waktu Pengerjaan</td>
                                        <td>Tanggal Bayar</td>
                                        <!--<td>Status</td>-->
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data_laundry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laundry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($laundry->nama); ?></td>
                                        <td><?php echo e($laundry->tgl); ?></td>
                                        <td><?php echo e($laundry->jenis_id); ?></td>
                                        <td><?php echo e($laundry->batas_waktu); ?></td>
                                        <td><?php echo e($laundry->tgl_bayar); ?></td>
                                        <!--<td><?php echo e($laundry->status); ?></td>-->
                                        <td><a href="/laundry/<?php echo e($laundry->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                        <td><a href="/laundry/<?php echo e($laundry->id); ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus?')">Hapus</a></td>
                                    </tr>
                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/laundry/create" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                  <label for="exampleInputEmail1">Atas Nama</label>
                  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
                </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Mauk</label>
                    <input name="tgl" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Paket</label>
                    <select name="jenis_id" class="form-control">
                        <option value="">-- Pilih --</option>
                        <?php $__currentLoopData = $jeniss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->jenis_laundry); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                    </select>
                </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Batas Waktu Pengerjaan</label>
                    <input name="batas_waktu" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Bayar</label>
                    <input name="tgl_bayar" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laundry\resources\views/laundry/index.blade.php ENDPATH**/ ?>