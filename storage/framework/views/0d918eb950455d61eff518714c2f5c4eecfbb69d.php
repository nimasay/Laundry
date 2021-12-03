
<?php $__env->startSection('content'); ?>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/laundry/<?php echo e($laundry->id); ?>/update" method="POST">
                                <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Atas Nama</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" value="<?php echo e($laundry->nama); ?>">
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Mauk</label>
                                        <input name="tgl" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($laundry->tgl); ?>">
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Jenis Paket</label>
                                            <select name="jenis_id" class="form-control" value="<?php echo e($laundry->jenis_id); ?>">
                                                <option value="">-- Pilih --</option>
                                                    <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                                                       <option value="<?php echo e($item->id); ?>" <?php if($item->id  == '<?php echo e($laundry->jenis_id); ?>'): ?> selected <?php endif; ?>><?php echo e($item->jenis_laundry); ?></option>
                                                    
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             
                                            </select>
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Batas Waktu Pengerjaan</label>
                                        <input name="batas_waktu" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($laundry->batas_waktu); ?>">
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Bayar</label>
                                        <input name="tgl_bayar" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($laundry->tgl_bayar); ?>">
                                    </div>
                    
                                    <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laundry\resources\views/laundry/edit.blade.php ENDPATH**/ ?>