
<?php $__env->startSection('title'); ?>
    Контакты 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<section id="faq">
    <div class="container">
        <div class="row d-flex  justify-content-center mb-5">
            <div class="col-xxxl-8 text-center p-3">
               
                    <div class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" id="breadcrumb-link">Главная</a></li>
                        
                        <li class="breadcrumb-item active" ><a href="<?php echo e(route('contact')); ?>" id="breadcrumb-link">Контакты</a></li>
                    </div>
                    <div class="breadcrumb-adaptiv2ver">
                        <li class="breadcrumb-item"><a href="about.html" id="breadcrumb-link">О нас</a></li>
                      </div>
               
                <h1>Контактная информация</h1>
                
            </div>
            <div class="col-sm-4">
                <p><b>Единый телефон :</b>  8 800 534 35 35 звонок по России бесплатный.
                    <br><b>Горячая линия работает</b> : Пн-Пт 10:00-18:00 (+2мск). <br><br>
                    <b>Email:</b>ecomarkethealfe@gmail.com
                </p>
            </div>
            <div class="col-sm-5">
                <p><b>Напишите нам :</b></p>
                <form action="" class="styled-form privacy-policy-inited" method="POST">
                    <input type="hidden" name="sessid" id="sessid_1" value="9f2cd76c31aff39404fee21ec8cb4f60">
                    	<div class="mf-name">
                            Имя
                            <input type="text" name="user_name" value="">
                        </div>
                        <div class="mf-email">
                            E-mail
                            <input type="text" name="user_email" value="">
                        </div>
                    
                        <div class="mf-message">
                            Сообщение
                            <textarea name="MESSAGE" rows="5" cols="40"></textarea>
                        </div>
                    
                            <input type="hidden" name="PARAMS_HASH" value="a4d7244b14d9e538407a56790ffb1326">
                        <input type="submit" name="submit" value="Отправить" class="sub-btn">
                    <p class="privacy-policy-msg">Нажимая на кнопку, вы даёте согласие на обработку персональных данных и соглашаетесь с <a id="police" href="#">политикой конфиденциальности</a></p></form>
            </div>
        </div>
    
            
        
         
    </div>
    
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jojo\Desktop\OpenServer\domains\healfe\resources\views/contact.blade.php ENDPATH**/ ?>