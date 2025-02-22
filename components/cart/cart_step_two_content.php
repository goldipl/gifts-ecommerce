<div class="container">
  <div class="cart-table_full_box d-flex flex-row">
    <div class="cart-table_box d-flex flex-column">
      <div class="delivery-address-box">
        <div class="radio-checkboxes-box">
          <label class="custom-radio-container bill">Chcę otrzymać paragon <input type="radio" name="account" class="custom_input" checked>
            <span class="custom-radio-checkmark"></span>
          </label>
          <label class="custom-radio-container invoice">Chcę otrzymać fakturę <input type="radio" name="account" class="custom_input">
            <span class="custom-radio-checkmark"></span>
          </label>
        </div>

        <div class="address-inputs-wrapper step-two-bill-wrapper">
          <div class="input-slot">
            <label for="select-country-delivery">Wybierz kraj</label>
            <select class="form-select" name="select-country-delivery" id="select-country-delivery">
              <option value="Polska">Polska</option>
              <option value="Niemcy">Niemcy</option>
            </select>
          </div>
          <div class="input-slot">
              <label for="name">Imię *</label>
              <input class="form-input" type="text" name="name" id="name" placeholder="np. Krzysztof" required>
            </div>
            <div class="input-slot">
              <label for="surname">Nazwisko *</label>
              <input class="form-input" type="text" name="surname" id="surname" placeholder="np. Nowak" required>
            </div>
            <div class="inputs-row">
              <div class="input-slot">
                <label for="street">Ulica *</label>
                <input class="form-input" type="text" name="street" id="street" placeholder="np. Warszawska" required>
              </div>
              <div class="input-slot">
                <label for="home-number">Nr domu *</label>
                <input class="form-input" type="text" name="home-number" id="home-number" placeholder="np. 320" required>
              </div>
              <div class="input-slot">
                <label for="apartment-number">Nr lokalu</label>
                <input class="form-input" type="text" name="apartment-number" id="apartment-number" placeholder="np. 15">
              </div>
            </div>
            <div class="inputs-row">
              <div class="input-slot">
                <label for="zip-code">Kod pocztowy *</label>
                <input class="form-input" type="text" name="zip-code" id="zip-code" placeholder="00-030" required>
              </div>
              <div class="input-slot">
                <label for="city">Miejscowość *</label>
                <input class="form-input" type="text" name="city" id="city" placeholder="np. Warszawa" required>
              </div>
            </div>
            <div class="input-slot">
              <label for="telephone">Telefon</label>
              <input class="form-input" type="text" name="telephone" id="telephone" placeholder="np. 555 555 555">
            </div>
            <div class="input-slot">
              <label for="email">E-mail *</label>
              <input class="form-input" type="email" name="email" id="email" placeholder="Email lub login" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
            <div class="input-slot">
                <label for="comments">Uwagi</label>
                <textarea class="form-textarea" name="comments" id="comments" placeholder="Tutaj możesz wpisać swoje uwagi do zamówienia"></textarea>
            </div>
        </div>

        <div class="other-address-checkbox-wrapper">
          <label class="custom-checkbox-container other-address-checkbox">
            <div class="register-checkbox"></div>Dostawa na inny adres <input type="checkbox" class="custom_input">
            <span class="custom-checkbox-checkmark"></span>
          </label>
        </div>

        <div class="address-inputs-wrapper step-two-bill-wrapper__other-address-delivery">
          <div class="input-slot">
              <label for="name-other-address">Imię *</label>
              <input class="form-input" type="text" name="name-other-address" id="name-other-address" placeholder="np. Krzysztof" required>
            </div>
            <div class="input-slot">
              <label for="surname-other-address">Nazwisko *</label>
              <input class="form-input" type="text" name="surname-other-address" id="surname-other-address" placeholder="np. Nowak" required>
            </div>
            <div class="inputs-row">
              <div class="input-slot">
                <label for="street-other-address">Ulica *</label>
                <input class="form-input" type="text" name="street-other-address" id="street-other-address" placeholder="np. Warszawska" required>
              </div>
              <div class="input-slot">
                <label for="home-number-other-address">Nr domu *</label>
                <input class="form-input" type="text" name="home-number-other-address" id="home-number-other-address" placeholder="np. 320" required>
              </div>
              <div class="input-slot">
                <label for="apartment-number-other-address">Nr lokalu</label>
                <input class="form-input" type="text" name="apartment-number-other-address" id="apartment-number-other-address" placeholder="np. 15">
              </div>
            </div>
            <div class="inputs-row">
              <div class="input-slot">
                <label for="zip-code-other-address">Kod pocztowy *</label>
                <input class="form-input" type="text" name="zip-code-other-address" id="zip-code-other-address" placeholder="00-030" required>
              </div>
              <div class="input-slot">
                <label for="city-other-address">Miejscowość *</label>
                <input class="form-input" type="text" name="city-other-address" id="city-other-address" placeholder="np. Warszawa" required>
              </div>
            </div>
            <div class="input-slot">
              <label for="telephone-other-address">Telefon</label>
              <input class="form-input" type="text" name="telephone-other-address" id="telephone-other-address" placeholder="np. 555 555 555">
            </div>
            <div class="input-slot">
              <label for="email-other-address">E-mail *</label>
              <input class="form-input" type="email" name="email-other-address" id="email-other-address" placeholder="Email lub login" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
        </div>

      </div>
      <div class="bottom-cart-box-with-btn">
        <div class="bottom-cart-buttons">
          <a href="#" class="white-btn prev">
            <img src="./assets/icons/cart/back-left-black-chevron.svg" alt="arrow icon" width="10" height="10">
            <span>wróć</span>
          </a>
        </div>
      </div>
    </div>
    <aside class="summary-aside">
      <div class="summary-box">
        <div class="summary-box__title">
          <p>Twoje zamówienie</p>
        </div>
        <div class="summary-box__netto">
          <p>Cena zamówienia netto: 95,72 PLN</p>
        </div>
        <div class="summary-box__delivery">
          <p>Koszt dostawy netto: 20,00 PLN</p>
        </div>
        <div class="summary-box__full-price">
          <p>Cena zamówienia z dostawą brutto</p>
          <strong>do zapłaty</strong>
          <span class="green">100,12 PLN</span>
          <a href="" class="color-btn">
            <span>Dalej</span>
            <img src="./assets/icons/product_page/cart.svg" alt="koszyk" width="17" height="17">
          </a>
        </div>
      </div>
    </aside>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const checkbox = document.querySelector(".other-address-checkbox input[type='checkbox']");
    const addressWrapper = document.querySelector(".address-inputs-wrapper.step-two-bill-wrapper__other-address-delivery");

    function toggleAddressWrapper() {
        if (checkbox.checked) {
            addressWrapper.style.display = "block";
        } else {
            addressWrapper.style.display = "none";
        }
    }

    checkbox.addEventListener("change", toggleAddressWrapper);

    toggleAddressWrapper();
});

</script>