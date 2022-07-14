@extends('layout.main2')

@section('title')
Экомаркет
@endsection

@section('body')
<section id="catalog">
    <div class="container mb-6">
            <div class="row align-items-center d-flex justify-content-center">
              <div class="col-xxl-8 text-center p-3">
                
              
                <div class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" id="breadcrumb-link">Главная</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('catalog') }}" id="breadcrumb-link">Каталог</a></li>
                  
              </div>
              <!-- <div class="breadcrumb-adaptiv">
                <li class="breadcrumb-item"><a href="index.html" id="breadcrumb-link">Главная</a></li>
              </div> -->
              </div>
            </div>
        
            <div class="row">
               
                @if (isset($nameCategory))
                <h5>{{ $nameCategory->name }}</h5>
                @else
                <h5>Все товары</h5> 
                @endif
                
                @if ($items && !$items->isEmpty())
                @foreach ($items as $i)
                <div class="col-md-4 mt-4 p-4">
                    <a href="{{ route('item', ['id' => $i->id]) }}">
                        <div class="card">
                            <div class="img-box">
                             <img src="{{ $i->photo }}"  alt="">
                              
                            </div>
                            <a href="{{ route('item', ['id' => $i->id]) }}"><p class="content-title text-center">{{ $i->name }}</p></a>
                            <div class="content">
                             
                              <span class="price">{{ $i->price }} ₽</span>
                              <span class="weight">{{ $i->weight }}г.</span>
                            </div>
                           
                            <a href="#" class="add-cart" type="button">Добавить</a>
                          </div> </a> <!--  end card-->
                    </a>
                </div>
                @endforeach
                @else
                <div class="row my-5">
                    <div class="col-12 text-center">
                        <h5><b>Товары не найдены!</b></h5>
                    </div>
                </div>
                @endif
            
               
                </div>
          
        </section> 
     
@endsection

