<div class="modal fade" id="reg" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reg">Регистрация</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('register')}}" id="regForm" onsubmit="ajaxForm(this, event)" method="POST">
          @csrf
        <div class="modal-body">
          <div class="input-group has-validation mb-2">
            <input type="text" name="name" id="name" class="form-control" placeholder="Имя">
            <div id="nameError" class="invalid-feedback"></div>
          </div>
          <div class="input-group has-validation mb-2">
            <input type="text" name="surname" id="surname" class="form-control" placeholder="Фамилия">
            <div id="surnameError" class="invalid-feedback"></div>
          </div>
          <div class="input-group has-validation mb-2">
            <input type="text" name="patronymic" id="patronymic" class="form-control" placeholder="Отчество">
            <div id="patronymicError" class="invalid-feedback"></div>
          </div>
          <div class="input-group has-validation mb-2">
            <input type="text" name="login" id="login" class="form-control" placeholder="Логин">
            <div id="loginError" class="invalid-feedback"></div>
          </div>
          <div class="input-group has-validation mb-2">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            <div id="emailError" class="invalid-feedback"></div>
          </div>
          <div class="input-group has-validation mb-2">
            <input type="password" name="password" id="password" class="form-control" placeholder="Пароль">
            <input type="password" name="passwordRepeat" id="passwordRepeat" class="form-control" placeholder="Повторите пароль">
            <div id="passwordError" class="invalid-feedback"></div>
            
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Соглашаюсь с правилами регистрации
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="modal-footer">
        
            <button type="submit"  name="register" class="btn-reg">Зарегистрироваться</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  {{-- Модальное окно авторизации --}}
  <div class="modal fade" id="auth" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="auth">Авторизация</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('auth')}}" id="authForm" onsubmit="ajaxForm(this, event)" method="POST">
          @csrf
          <div class="modal-body">
            <div class="input-group has-validation mb-2">
              <input type="text" name="login" id="login" class="form-control" placeholder="Логин">
              <div class="invalid-feedback" id="loginError"></div>
            </div>
            <div class="input-group has-validation mb-2">
              <input type="password" name="password" id="password" class="form-control" placeholder="Пароль" >
              <div class="invalid-feedback" id="passwordError"></div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit"class="btn-auth">Войти</button>
          </div>
        </form>
      </div>
    </div>
  </div>