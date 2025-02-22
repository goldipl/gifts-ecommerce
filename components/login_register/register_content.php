<div class="container register-page">
  <div class="d-flex flex-column">
    <div class="register-content">
      <h1>Załóż konto</h1>
      <div class="radio-checkboxes-box">
        <label class="custom-radio-container normal">Konto zwykłe <input type="radio" name="account" class="custom_input" checked>
          <span class="custom-radio-checkmark"></span>
        </label>
        <label class="custom-radio-container company">Konto firma <input type="radio" name="account" class="custom_input">
          <span class="custom-radio-checkmark"></span>
        </label>
      </div>
      <form class="register-form-wrapper">
        <div class="register-form">
          <div class="register-form-left">
            <div class="input-slot">
              <label for="name">Imię *</label>
              <input class="form-input" type="text" name="name" id="name" placeholder="np. Krzysztof" required>
            </div>
            <div class="input-slot">
              <label for="surname">Nazwisko *</label>
              <input class="form-input" type="text"  name="surname" id="surname" placeholder="np. Nowak" required>
            </div>
            <div class="input-slot">
              <label for="email">E-mail lub login *</label>
              <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email" placeholder="Email lub login" required>
            </div>
            <div class="input-slot">
              <label for="password">Hasło *</label>
              <input class="form-input" type="password" name="password" id="password" placeholder="Wpisz tutaj swoje hasło" required>
            </div>
          </div>
          <div class="register-form-right">
              <div class="inputs-row">
                <div class="input-slot">
                  <label for="password">Ulica *</label>
                  <input class="form-input" type="text" name="street" id="street" placeholder="np. Warszawska" required>
                </div>
                <div class="input-slot">
                  <label for="password">Ulica *</label>
                  <input class="form-input" type="text" name="street" id="street" placeholder="np. Warszawska" required>
                </div>
                <div class="input-slot">
                  <label for="password">Ulica *</label>
                  <input class="form-input" type="text" name="street" id="street" placeholder="np. Warszawska" required>
                </div>
              </div>
          </div>
        </div>
        <button href="" class="color-btn create-acc-btn">Utwórz konto <img src="./assets/icons/contact/white-arrow.svg" width="21" height="10" alt="strzałka">
        </button>
      </form>
    </div>
    <div class="bottom-cart-box-with-btn">
      <div class="bottom-cart-buttons">
        <a href="#" class="white-btn prev">
          <img src="./assets/icons/cart/back-left-black-chevron.svg" alt="arrow icon" width="10" height="10">
          <span>Wróć</span>
        </a>
      </div>
    </div>
  </div>
</div>