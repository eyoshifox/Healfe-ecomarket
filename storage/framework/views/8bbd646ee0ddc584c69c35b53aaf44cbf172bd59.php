

<?php $__env->startSection('title'); ?>
Экомаркет
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<section id="catalog">
    <div class="container mb-6">
            <div class="row align-items-center d-flex justify-content-center">
              <div class="col-xxl-8 text-center p-3">
                
              
                <div class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" id="breadcrumb-link">Главная</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo e(route('catalog')); ?>" id="breadcrumb-link">Каталог</a></li>
                  
              </div>
              <!-- <div class="breadcrumb-adaptiv">
                <li class="breadcrumb-item"><a href="index.html" id="breadcrumb-link">Главная</a></li>
              </div> -->
              </div>
            </div>
        
            <div class="row">
               
                <?php if(isset($nameCategory)): ?>
                <h5><?php echo e($nameCategory->name); ?></h5>
                <?php else: ?>
                <h5>Все товары</h5> 
                <?php endif; ?>
                
                <?php if($items && !$items->isEmpty()): ?>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mt-4 p-4">
                    <a href="<?php echo e(route('item', ['id' => $i->id])); ?>">
                        <div class="card">
                            <div class="img-box">
                             <img src="<?php echo e($i->photo); ?>"  alt="">
                              
                            </div>
                            <a href="<?php echo e(route('item', ['id' => $i->id])); ?>"><p class="content-title text-center"><?php echo e($i->name); ?></p></a>
                            <div class="content">
                             
                              <span class="price"><?php echo e($i->price); ?> ₽</span>
                              <span class="weight"><?php echo e($i->weight); ?>г.</span>
                            </div>
                           
                            <a href="#" class="add-cart" type="button">Добавить</a>
                          </div> </a> <!--  end card-->
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div class="row my-5">
                    <div class="col-12 text-center">
                        <h5><b>Товары не найдены!</b></h5>
                    </div>
                </div>
                <?php endif; ?>
            
               
                </div>
          
        </section> 
     
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/e/eyoshij0/eyoshij0.beget.tech/public_html/resources/views/catalog.blade.php ENDPATH**/ ?>