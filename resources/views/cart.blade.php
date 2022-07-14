@extends('layout.main2')
@section('title')
    Корзина - Healfe
@endsection
@section('body')
<section id="cart">
    <div class="container mb-6">
        <div class="row d-flex  justify-content-center ">
            <div class="col-xxl-8 text-center p-3">
              <div class="breadcrumb ">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" id="breadcrumb-link">Главная</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('cart') }}" id="breadcrumb-link">Корзина</a></li>
                  
              </div>
         
          <h1 class="title">Корзина</h1>
            </div>
          </div>
          <div class="row d-flex" id="cart-block">
             <div class="col-5 d-flex">
              <div class="cart-total">
                <p>Итого:</p>
                <span>Скидка:</span> 
                
              </div>
              <div class="cart-price">
                <p>120₽</p>
                <span><s>60 ₽</s></span>
            </div>
            </div> 
         
            
            <div class="col-5 d-flex justify-content-end">
                <div id="seventh" class="buttonBox d-flex justify-content-center">
                    <a class="button">Оформить заказ</a>
                  </div>
                
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 ">
                <h6>В корзине 3 товара</h6>
            </div>
        </div>
        <div class="row">
            <table cellpadding="10" width="100%">
                <thead>
                  
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </thead>
                <tbody>
                 
                    
                  <tr>
                    
                    <td><div class="table-img"><div class="hit">20%</div><img src="/public/images/popular1.jpg" width="100" height="100" alt=""></div></td>
                    <td><div class="table-name">
                        
                        <h2>Яйца куриные Bio</h2>
                        <span>Грамм: 150 
                           
                        </span>
                    </div>
                        
                    </td>
                    <td><div class="table-sum">
                      <p>Цена за 1 шт.</p>
                      <h2>180 ₽</h5>
                      <p><s>60 ₽</s></p>
                    </div></td>
                    <td>
                       
                        <div class="quantity_inner">  
                            <button class="bt_plus">
                                <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </button>      
                            
                            <input type="text" value="1" size="2" class="quantity" data-max-count="20" />
                            <button class="bt_minus">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </button>
                        </div>
  
  
                    </td>
                    <td><div class="table-sum">
                        <p>Итого:</p>
                        <h2>120</h5>
                        <p><s>180 ₽</s></p>
                      </div></td>
                    <td><a href="#"><img src="/public/images/icons/close.svg" width="12" height="12" alt=""></a></td>
                  </tr>
                  
                </tbody>
                
              </table>
        </div>
    </div>
</section>
@endsection