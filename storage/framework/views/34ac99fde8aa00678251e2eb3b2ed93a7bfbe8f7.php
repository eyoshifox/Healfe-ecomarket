

<?php $__env->startSection('title'); ?>
Экомаркет
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<section class="item" id="item">
    <div class="container mb-6">
            <div class="row align-items-center d-flex justify-content-center">
              <div class="col-xxl-8 text-center p-3">
                
              
                <div class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" id="breadcrumb-link">Главная</a></li>
                  <li class="breadcrumb-item"><a href="#" id="breadcrumb-link"><?php echo e($item->name); ?></a></li>
                  
              </div>
              <!-- <div class="breadcrumb-adaptiv">
                <li class="breadcrumb-item"><a href="index.html" id="breadcrumb-link">Главная</a></li>
              </div> -->
              </div>
            </div>
        
         
            
                <div class="row">
                   <div class="col-xxl-8">
                    <div class="img-box">
                      <img  src="<?php echo e($item->photo); ?>" alt=""> 
                    </div>
                    
                    
                  </div> 
               
                  <div class="col-xxl-4">
                    <div class="group-promo">
                      
                    </div><!-- end group promo -->
                   
                  <div class="item-name">
                  <h2><?php echo e($item->name); ?></h2>
                </div>
                <div class="item-price"> <?php echo e($item->price); ?> ₽ 
                  
                </div>
                <!-- Size Configuration -->
              
                  <!-- Product Configuration -->
                  <div class="product-configuration mt-4">
                   
                  
                  
                  <div class="item-desc mb-3">
                    <h5><b>Описание</b> </h5>
                    <p><?php echo e($item->desc); ?> </p>
                  </div>
                   <div class="item-bth d-flex ">
                    <a class="bth-cart" href="#">Добавить в корзину</a>
                    
                  </div> 
                  
                  
                  
                  </div>
                </div><!-- end row -->
              </div>
              <div class="row ">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link text-dark active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" >КБЖУ</button>
                    </li>
                   
                    <li class="nav-item " role="presentation" >
                      <button class="nav-link text-dark" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false" >Отзывы</button>
                    </li>
                    
                  </ul>
                  <!-- Tab panes -->
  <div class="tab-content m-3">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class=" mb-3">
            <h5><b>Калорийность:</b> <?php echo e($item->cal); ?> </h5>
            
          </div>
          <div class=" mb-3">
            <h5><b>Углеводы:</b> <?php echo e($item->carbon); ?> </h5>
            
          </div>
          <div class=" mb-3">
            <h5><b>Жиры:</b> <?php echo e($item->fats); ?> </h5>
            
          </div>
          <div class=" mb-3">
            <h5><b>Белки:</b> <?php echo e($item->protein); ?> </h5>
            
          </div>
     
        </div>

    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
      <div class="row d-flex justify-content-center">
        <h5>Еще нет отзывов!</h5>
         
        
       
      
      </div>
    </div>
    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">..s.</div>
  </div>
          </div>
                </div>
          
        </section> 
     
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jojo\Desktop\OpenServer\domains\healfe\resources\views/item.blade.php ENDPATH**/ ?>